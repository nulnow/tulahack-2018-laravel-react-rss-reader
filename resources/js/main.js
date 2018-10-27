document.api = (data, callback) => {
    fetch('/tools', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then((response)=> response.json())
        .then((resp) => {
            callback(resp);
        });
};

const api = document.api;
const linksContainer = document.getElementById('links-container');
const page = document.getElementById('page');
const userButton = document.getElementById('user-button');
const buttonPlus = document.getElementById('plus-button');
const dashboard = document.getElementById('dashboard');
const addLinkForm = document.getElementById('add-link-form');

document.state = {
    userName: "",
    links: {}
};

const state = document.state;

const serverSync = () => {

};

// Загрузить ленты пользователя
document.onload = (event) => {

};

buttonPlus.onclick = (event) => {
    buttonPlus.classList.toggle('app__plus-button--active');
    dashboard.classList.toggle('dashboard--hidden');
    console.log(buttonPlus);
};

addLinkForm.onsubmit = event => {
    console.log('kek');
    event.preventDefault();
    const link = document.getElementById('link-input').value;
    document.api({command: "add_link", data: {link: link}}, (resp)=> {
        console.log(resp)
    });
};

document.api({command: "get_user", data: {}}, (user) => {
    userButton.innerText = user.name;
    state.userName = user.name;
});

function updaTTe() {
    document.api({command: "get_links", data: {}}, (links) => {
        links.forEach((link) => {
            linksContainer.innerHTML += `
                <div class="link_container">
                    <form action="/tools" method="post" data-id="${link.id}" class="delete-link-form">
                        <button><i class="fas fa-trash"></i></button>
                    </form>
                    <div class="link" data-id="${link.id}">${link.url}</div>
                </div>
            `;
            document.api({command: "get_news_by_link_id", data: {link_id: link.id}}, (news) => {
                link.news = news;
                state.links[`${link.id}`] = link;
            });
        });
    });
}

updaTTe();

setInterval( () => {

    const links = document.querySelectorAll('.link');
    // console.log(links);
    [].forEach.call(links, (link) => {
        link.onclick = (event) => {
            const link_id = event.target.getAttribute('data-id');
            const news = state.links[link_id].news;
            page.innerHTML = '';
            [].forEach.call(news, (nev) => {
                console.log(nev);
                const html = generateArticle(nev.title, nev.pubDate, nev.description, nev.guid);
                page.innerHTML += html;
            });
        }
    });

    [].forEach.call(document.querySelectorAll('.delete-link-form'), (form) => {
        console.log(form);
        // return;
        form.onsubmit = event => {
            event.preventDefault();
            console.log(event);

            const link_id = event.target.getAttribute('data-id');
            document.api({command: "delete_link_by_id", data: {id: link_id}}, (response) => {
                alert("Link has been deleted!");
            });
        };
        console.log(form.onsubmit);
    });

}, 2000);

function generateArticle(title, date, body, url) {
    return `
            <div class="article">
                <div class="article__title">${title}</div>
                <div class="article__date">${date}</div>
                <div class="article__body">${body}</div>
                <a class="article__url" target="_blank" href="${url}">${url}</a>
            </div>
    `;
}

$('.delete-link-form').submit(event => {
    event.preventDefault();
    console.log(event)
});