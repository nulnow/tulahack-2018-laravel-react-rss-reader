/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

document.api = function (data, callback) {
    fetch('/tools', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(function (response) {
        return response.json();
    }).then(function (resp) {
        callback(resp);
    });
};

var api = document.api;
var linksContainer = document.getElementById('links-container');
var page = document.getElementById('page');
var userButton = document.getElementById('user-button');
var buttonPlus = document.getElementById('plus-button');
var dashboard = document.getElementById('dashboard');
var addLinkForm = document.getElementById('add-link-form');

document.state = {
    userName: "",
    links: {}
};

var state = document.state;

var serverSync = function serverSync() {};

// Загрузить ленты пользователя
document.onload = function (event) {};

buttonPlus.onclick = function (event) {
    buttonPlus.classList.toggle('app__plus-button--active');
    dashboard.classList.toggle('dashboard--hidden');
    console.log(buttonPlus);
};

addLinkForm.onsubmit = function (event) {
    console.log('kek');
    event.preventDefault();
    var link = document.getElementById('link-input').value;
    document.api({ command: "add_link", data: { link: link } }, function (resp) {
        console.log(resp);
    });
};

document.api({ command: "get_user", data: {} }, function (user) {
    userButton.innerText = user.name;
    state.userName = user.name;
});

function updaTTe() {
    document.api({ command: "get_links", data: {} }, function (links) {
        links.forEach(function (link) {
            linksContainer.innerHTML += '\n                <div class="link_container">\n                    <form action="/tools" method="post" data-id="' + link.id + '" class="delete-link-form">\n                        <button><i class="fas fa-trash"></i></button>\n                    </form>\n                    <div class="link" data-id="' + link.id + '">' + link.url + '</div>\n                </div>\n            ';
            document.api({ command: "get_news_by_link_id", data: { link_id: link.id } }, function (news) {
                link.news = news;
                state.links['' + link.id] = link;
            });
        });
    });
}

updaTTe();

setInterval(function () {

    var links = document.querySelectorAll('.link');
    // console.log(links);
    [].forEach.call(links, function (link) {
        link.onclick = function (event) {
            var link_id = event.target.getAttribute('data-id');
            var news = state.links[link_id].news;
            page.innerHTML = '';
            [].forEach.call(news, function (nev) {
                console.log(nev);
                var html = generateArticle(nev.title, nev.pubDate, nev.description, nev.guid);
                page.innerHTML += html;
            });
        };
    });

    [].forEach.call(document.querySelectorAll('.delete-link-form'), function (form) {
        console.log(form);
        // return;
        form.onsubmit = function (event) {
            event.preventDefault();
            console.log(event);

            var link_id = event.target.getAttribute('data-id');
            document.api({ command: "delete_link_by_id", data: { id: link_id } }, function (response) {
                alert("Link has been deleted!");
            });
        };
        console.log(form.onsubmit);
    });
}, 2000);

function generateArticle(title, date, body, url) {
    return '\n            <div class="article">\n                <div class="article__title">' + title + '</div>\n                <div class="article__date">' + date + '</div>\n                <div class="article__body">' + body + '</div>\n                <a class="article__url" target="_blank" href="' + url + '">' + url + '</a>\n            </div>\n    ';
}

$('.delete-link-form').submit(function (event) {
    event.preventDefault();
    console.log(event);
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);