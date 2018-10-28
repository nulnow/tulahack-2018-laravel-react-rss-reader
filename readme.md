
# RSS reader (react + laravel)
### Проект на хакатон Tula Hack 2018
### от команды "Телевизор между главным и 9 корпусом"


#### Краткое описантие:

Для использования нужно зарегистрироваться (ввести имя и email).
В приложении можно добавлять RSS ленты, читать анонсы новостей из них и переходить на страницу с полной новостью
(уже на сайте новости)

#### Для установки:
(Необходимо наличие на компьютере php 7.1+, composer, MySQL, Node js, npm)
```
git clone https://github.com/nulnow/tulahack-2018-laravel-react-rss-reader
cd tulahack-2018-laravel-react-rss-reader
composer install
npm install
php artisan key:generate
```

Создать в корне проекта файл .env и поместить туда следующее
и вставить сюда свои данные для подключения к бд:

```
APP_NAME=RSSReader
APP_ENV=local
APP_KEY=base64:lsfPhkbhBVWVgXzx9tcS5Oq/05EbxxLRp7P5cxQYEBo=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=!!!!!!!!!!!!!Тут ввести имя базы
DB_USERNAME=!!!!!!!!!!!!!Тут имя пользователя
DB_PASSWORD=!!!!!!!!!!!!!Тут пароль пользователя

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

В корне проекта ввести команду:


```
php artisan serve
```

Зайти на http://localhost:8000/

~~И надеяться, что всё заработает~~