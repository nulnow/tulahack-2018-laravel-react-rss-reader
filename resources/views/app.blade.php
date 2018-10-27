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
            Terrogram
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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eligendi eveniet laboriosam odio officiis?
        Alias aliquam architecto corporis ducimus eaque earum, harum ipsa, quam rem sapiente sint tempora voluptate
        voluptates.</p>
    <p>A alias aliquid architecto deleniti, distinctio, dolor dolores expedita explicabo itaque quam quo, ratione
        repellendus sapiente tempore tenetur totam voluptatem. Accusamus ad rerum temporibus! Impedit ipsam nostrum quod
        repellat sed.</p>
    <p>Animi aspernatur at aut corporis cumque doloremque eaque error esse et ex exercitationem fugit impedit iste
        magnam magni maxime natus praesentium qui, quisquam sequi tempora unde ut veritatis voluptatem voluptatibus.</p>
    <p>Accusantium, ducimus ipsam maxime odio quos repellat voluptate voluptates. Aspernatur dignissimos doloribus enim
        saepe sint ullam veniam. Amet corporis dolores ea, laborum mollitia, natus non nostrum quis quisquam totam
        unde.</p>
    <p>Architecto cupiditate fugit neque repudiandae voluptas. Adipisci alias culpa debitis dicta dolore doloremque
        earum eligendi esse et eum eveniet explicabo, laborum libero modi necessitatibus quae quaerat quos repellat
        repellendus saepe!</p>
    <p>Alias amet aperiam corporis ea officia optio rem? At autem blanditiis debitis dolore dolores ducimus incidunt,
        iusto laboriosam maxime minus nobis perferendis quae quaerat recusandae reiciendis reprehenderit sapiente
        voluptatum! Amet?</p>
    <p>Ad, animi dolorum earum esse illum in ipsa laboriosam nam, odio quae recusandae suscipit totam ullam. Consectetur
        cupiditate fuga nobis numquam saepe? Consectetur dicta ea omnis porro quia temporibus veritatis!</p>
    <p>A beatae culpa cum debitis dolore doloribus, eaque facere ipsam itaque maiores maxime nesciunt, nihil nobis non
        perspiciatis praesentium quisquam quod recusandae reprehenderit repudiandae sunt temporibus tenetur totam vel
        voluptatum!</p>
    <p>Aspernatur illo provident sapiente. Adipisci aliquid aperiam atque commodi debitis delectus doloremque, eveniet
        explicabo, fugiat illo ipsa laudantium minima nemo nesciunt officiis optio porro, provident quae quasi repellat
        sit voluptates!</p>
    <p>Aperiam eos esse laborum nihil obcaecati quam. Aperiam assumenda aut blanditiis cupiditate debitis deserunt
        dolore doloribus eius eum expedita incidunt laborum, repellat sed sequi tempore voluptas voluptate, voluptatem
        voluptatibus voluptatum.</p>
    <p>Illum iste iure sunt vero voluptate voluptatibus? A accusamus aspernatur commodi dolorem fugiat in itaque
        laudantium nostrum omnis quia quisquam quod, ratione velit. Asperiores assumenda eveniet ipsum iusto minima
        vel!</p>
    <p>Omnis quibusdam quis reprehenderit. Itaque minima, natus perferendis perspiciatis sit vero. A ad dolore
        doloribus, est et eum facere facilis impedit labore magni numquam reiciendis repellendus reprehenderit saepe
        tenetur voluptates.</p>
    <p>Accusamus aspernatur aut, dicta doloremque dolores, doloribus illo minus modi nobis non pariatur quibusdam
        reiciendis sint tempora, totam ut voluptas voluptate? Dolorem eligendi explicabo nisi obcaecati perspiciatis!
        Cumque eligendi, illum.</p>
    <p>Excepturi incidunt laboriosam modi nulla quo reiciendis reprehenderit repudiandae rerum temporibus vitae?
        Asperiores assumenda atque blanditiis eos molestiae pariatur, repellendus vel vitae voluptatum. Excepturi
        laboriosam porro, tempora ullam velit veritatis.</p>
    <p>Excepturi magnam omnis placeat? Dolorum iusto mollitia obcaecati optio placeat? Assumenda commodi ipsa, iure nisi
        velit vero voluptate voluptatibus. Aliquam ea impedit incidunt ipsam omnis repellat repellendus rerum tenetur
        velit.</p>
    <p>Architecto aut blanditiis cum cumque, distinctio ducimus hic illo illum ipsa iure labore minus modi perferendis
        placeat quaerat quasi quo saepe voluptatibus. A, ad deserunt expedita magni maiores reprehenderit vel!</p>
    <p>Animi, autem debitis dignissimos dolore, doloremque dolorum, esse eveniet inventore modi necessitatibus nostrum
        omnis quas quia soluta ut voluptas voluptatibus. Amet assumenda consequuntur dolores facilis impedit itaque
        nulla porro quam!</p>
    <p>Accusantium debitis facilis id inventore iure magni minima nihil nisi nobis, quibusdam. Aliquam architecto minus
        modi nisi, quam tempora temporibus voluptas. Amet architecto dolorum ea earum in nisi provident sit.</p>
    <p>Architecto assumenda culpa cumque, distinctio eaque eos error fugit hic illo laboriosam modi natus numquam
        officia omnis perferendis quasi, quia quo repudiandae similique sunt suscipit tenetur totam velit voluptas
        voluptatibus.</p>
    <p>Dolor, impedit, neque! Atque maiores quas reiciendis. Blanditiis illum in, minus obcaecati perspiciatis provident
        sed sunt. Assumenda consequuntur excepturi explicabo fugiat incidunt labore maiores nihil nobis nulla, quaerat
        quis tenetur.</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>