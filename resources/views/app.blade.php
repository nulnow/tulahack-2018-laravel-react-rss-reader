<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/app.css">
    <title>APP</title>
</head>
<body>


{{--Пока не нужно--}}


{{--<form action="{{ route('logout') }}" method="POST">--}}
    {{--@csrf--}}
    {{--<input type="submit" value="Выйти">--}}
{{--</form>--}}

{{--<div id="app"></div>--}}

{{--<script src="js/app.js"></script>--}}
{{--END OF Пока не нужно--}}

<div class="app">
    <button class="app__plus-button" id="plus-button"><span><i class="fas fa-cog"></i></span></button>
    <div class="app__left-bar">
        <div class="app__navbar">
            RSS Reader
        </div>
        <div class="app__navbar app__navbar--tools">
            <span class="tools-button tools-button--username" id="user-button"></span>
            <form action="{{ route('logout') }}" method="POST">
                <button class="tools-button tools-button--logout">Logout</button>
            </form>
        </div>
        <div class="app__links-container" id="links-container">
            {{--<div class="link">Новости галактики</div>--}}
            {{--<div class="link">New York Times</div>--}}
            {{--<div class="link">Spors News TV</div>--}}
            {{--<div class="link">Laravel Conf</div>--}}
            {{--<div class="link">React Conf Luxemburg</div>--}}
            {{--<div class="link">Новости галактики</div>--}}
            {{--<div class="link">New York Times</div>--}}
            {{--<div class="link">Spors News TV</div>--}}
            {{--<div class="link">Laravel Conf</div>--}}
            {{--<div class="link">React Conf Luxemburg</div>--}}
            {{--<div class="link">Новости галактики</div>--}}
            {{--<div class="link">New York Times</div>--}}
            {{--<div class="link">Spors News TV</div>--}}
            {{--<div class="link">Laravel Conf</div>--}}
            {{--<div class="link">React Conf Luxemburg</div>--}}
            {{--<div class="link">Новости галактики</div>--}}
            {{--<div class="link">New York Times</div>--}}
            {{--<div class="link">Spors News TV</div>--}}
            {{--<div class="link">Laravel Conf</div>--}}
            {{--<div class="link">React Conf Luxemburg</div>--}}
            {{--<div class="link">Новости галактики</div>--}}
            {{--<div class="link">New York Times</div>--}}
            {{--<div class="link">Spors News TV</div>--}}
            {{--<div class="link">Laravel Conf</div>--}}
            {{--<div class="link">React Conf Luxemburg</div>--}}
        </div>
    </div>
    <div class="app__page-container">
        <div class="app__page" id="page">
            <div class="article">
                <div class="article__title">Прямая линия с ТМ. v3.0.</div>
                <div class="article__date">12.12.2018</div>
                <div class="article__body">
                    Делимся с вами списком изменений
                    по нашим проектам за месяц
                    и в третий раз приглашаем к приятному
                    и взаимовыгодному общению. Работаем по
                    старой схеме — вы задаёте любые вопросы,
                    а мы на них отвечаем:
                </div>
                <a class="article__url" href="#">www.sait-prikolov.ru</a>
            </div>
            <div class="article">
                <div class="article__title">Прямая линия с ТМ. v3.0.</div>
                <div class="article__date">12.12.2018</div>
                <div class="article__body">
                    Делимся с вами списком изменений
                    по нашим проектам за месяц
                    и в третий раз приглашаем к приятному
                    и взаимовыгодному общению. Работаем по
                    старой схеме — вы задаёте любые вопросы,
                    а мы на них отвечаем:
                </div>
                <a class="article__url" href="#">www.sait-prikolov.ru</a>
            </div>
            <div class="article">
                <div class="article__title">Прямая линия с ТМ. v3.0.</div>
                <div class="article__date">12.12.2018</div>
                <div class="article__body">
                    Делимся с вами списком изменений
                    по нашим проектам за месяц
                    и в третий раз приглашаем к приятному
                    и взаимовыгодному общению. Работаем по
                    старой схеме — вы задаёте любые вопросы,
                    а мы на них отвечаем:
                </div>
                <a class="article__url" href="#">www.sait-prikolov.ru</a>
            </div>
            <div class="article">
                <div class="article__title">Прямая линия с ТМ. v3.0.</div>
                <div class="article__date">12.12.2018</div>
                <div class="article__body">
                    Делимся с вами списком изменений
                    по нашим проектам за месяц
                    и в третий раз приглашаем к приятному
                    и взаимовыгодному общению. Работаем по
                    старой схеме — вы задаёте любые вопросы,
                    а мы на них отвечаем:
                </div>
                <a class="article__url" href="#">www.sait-prikolov.ru</a>
            </div>
            <div class="article">
                <div class="article__title">Прямая линия с ТМ. v3.0.</div>
                <div class="article__date">12.12.2018</div>
                <div class="article__body">
                    Делимся с вами списком изменений
                    по нашим проектам за месяц
                    и в третий раз приглашаем к приятному
                    и взаимовыгодному общению. Работаем по
                    старой схеме — вы задаёте любые вопросы,
                    а мы на них отвечаем:
                </div>
                <a class="article__url" href="#">www.sait-prikolov.ru</a>
            </div>
            <div class="article">
                <div class="article__title">Прямая линия с ТМ. v3.0.</div>
                <div class="article__date">12.12.2018</div>
                <div class="article__body">
                    Делимся с вами списком изменений
                    по нашим проектам за месяц
                    и в третий раз приглашаем к приятному
                    и взаимовыгодному общению. Работаем по
                    старой схеме — вы задаёте любые вопросы,
                    а мы на них отвечаем:
                </div>
                <a class="article__url" href="#">www.sait-prikolov.ru</a>
            </div>
        </div>
    </div>
</div>

<div id="dashboard" class="dashboard dashboard--hidden">
    <h1>Dashboard</h1>
    <p>Here you can edit your settings</p>
    <form action="/tools" method="POST" id="add-link-form" class="dashboard-form">
        <input type="url" placeholder="RSS link" class="dashboard-input" id="link-input" autocomplete="off" required>
        <button class="dashboard-button">Add link</button>
    </form>
    <p>Тут можно добавить ещё всяких элементов управления или написать документацию, помощь, справку, лицензию и тд</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>