<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
    <link rel="stylesheet" href="./styles/myprofile/style.css">
    <link rel="stylesheet" href="./styles/myprofile/tablet/style-tablet.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-logo">
        <img src="./images/myprofile/desktop/logo.png" alt="logo" class="logo">
        <img src="./images/myprofile/desktop/text-logo.png" alt="text-logo" class="text-logo">
    </div>
    <div class="header-info">
        <p>Техническая поддержка: student@skillgate.tj</p>
        <div class="header-info-cabinet">
            <img src="./images/myprofile/icons/user.png" alt="">

            <ul class="cabinet-menu">
                <li class="dropdown"><a href="#">Махмудов Сорбон</a>
                    <ul class="dropdown-content">
                        <li><img src="./images/myprofile/icons/cabinet-user.png" alt=""><a href="#">Мой профиль</a></li>
                        <li><img src="./images/myprofile/icons/cabinet-settings.png" alt=""><a href="#">Настройки</a></li>
                        <li id="exit"><img src="./images/myprofile/icons/cabinet-exit.png" alt="" > <a href="#">Выход</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="side-bar">
    <div class="side-bar-info">
        <img src="./images/myprofile/icons/side-user.png" alt="side-user.png">
        <h2>Махмудов Сорбон</h2>
        <p>Уровень: Beginner - Elementary</p>
    </div>
    <div class="side-bar-menu">
        <ul>
            <li><img src="./images/myprofile/icons/side-main.png" alt="side-main.png"><a href="">Главная</a></li>
            <li><img src="./images/myprofile/icons/side-course.png" alt="side-course.png"><a href="">Курс</a></li>
            <li><img src="./images/myprofile/icons/side-marks.png" alt="side-marks.png"><a href="">Оценки</a></li>
        </ul>
    </div>
    <div class="side-bar-nav">
        <div class="side-bar-nav-container">
            <div>
                <p>Грамматика</p>
                <img src="./images/myprofile/icons/nav-grammar.png" alt="nav-grammar.png">
            </div>
            <div>
                <p>Видео</p>
                <img src="./images/myprofile/icons/nav-video.png" alt="nav-video.png">
            </div>
            <div>
                <p>Словарь</p>
                <img src="./images/myprofile/icons/nav-vocab.png" alt="nav-vocab.png">
            </div>
            <div>
                <p>Эл. книги</p>
                <img src="./images/myprofile/icons/nav-elbook.png" alt="nav-elbook.png">
            </div>
            <div>
                <p>Аудиокниги</p>
                <img src="./images/myprofile/icons/nav-audiobook.png" alt="nav-audiobook.png">
            </div>
            <div>
                <p>Музыка</p>
                <img src="./images/myprofile/icons/nav-music.png" alt="nav-music.png">
            </div>
            <div>
                <p>Фильмы</p>
                <img src="./images/myprofile/icons/nav-movie.png" alt="nav-movie.png">
            </div>
            <div>
                <p>Онлайн чат</p>
                <img src="./images/myprofile/icons/nav-chat.png" alt="nav-chat.png">
            </div>
            <div>
                <p>Cпикинг клуб</p>
                <img src="./images/myprofile/icons/nav-spclub.png" alt="nav-spclub.png">
            </div>

        </div>
    </div>
    <div class="side-bar-footer">
        <p>Для связи:
            (+992) 987 65 4321</p>
        <p>Мы в социальных сетях:</p>
        <img src="./images/myprofile/icons/side-social.png" alt="side-social.png">
    </div>
</div>


<div class="my-profile">
    <div id="profileBlock">
        <div class="my-profile-title">
            <h1>Мой профиль</h1>
        </div>
        <form action="">
            <div class="accounts-inputs">
                <div>
                    <label for="">
                        Фамилия
                        <input required type="text" placeholder="Укажите вашу фамилию">
                    </label>
                    <label for="">
                        Телефон
                        <input required type="text" placeholder="Укажите ваш телефон">
                    </label>
                    <label for="">
                        Страна
                        <input required type="text" placeholder="Где вы находитесь?">
                    </label>
                    <label for="">
                        Логин
                        <input required type="text" placeholder="Придумайте логин">
                    </label>
                </div>
                <div>
                    <label for="">
                        Имя
                        <input required type="text" placeholder="Укажите ваше имя">
                    </label>
                    <label for="">
                        Эл.почта
                        <input required type="text" placeholder="Укажите вашу эл.почту">
                    </label>
                    <label for="">
                        Город/район
                        <input required type="text" placeholder="В каком городе/районе?">
                    </label>
                    <label for="">
                        Пароль
                        <input required type="text" placeholder="Придумайте пароль">
                    </label>
                </div>
            </div>

        </form>
        <div class="accounts-pay">
            <img src="./images/myprofile/icons/pay.png" alt="pay.png">
            <div class="accounts-pay-buttons">
                <button id="settingsButton">Дополнительные настройки</button>
                <button id="editButton">Редактировать профиль</button>
            </div>
        </div>
    </div>

    <div id='settingsBlock'>
        <div class="my-profile-title">
            <h1>Дополнительные настройки</h1>
            <button id="settingsBlockBack">назад</button>
        </div>
        <form action="">
            <h2>Социальные сети</h2>
            <ul>
                <li>
                    <span>Инстаграм <img src="./images/myprofile/icons/sett-input.png" alt="sett-input1.png" id="showInput"></span>
                    <input type="text" placeholder="Ссылка на инстаграм">
                </li>
                <li>
                    <span>Facebook <img src="./images/myprofile/icons/sett-input.png" alt="sett-input2.png" id="showInput"></span>
                    <input type="text" placeholder="Ссылка на facebook">
                </li>
                <li>
                    <span>Telegram <img src="./images/myprofile/icons/sett-input.png" alt="sett-input3.png" id="showInput"></span>
                    <input type="text" placeholder="Ссылка на telegram">
                </li>
                <li>
                    <span>Whatsapp <img src="./images/myprofile/icons/sett-input.png" alt="sett-input4.png" id="showInput"></span>
                    <input type="text" placeholder="Ссылка на watsapp">
                </li>
            </ul>
            <div class="save-settings">
                <label for="">
                    <input type="checkbox" required>
                    Я согласен, чтобы мои данные были в Онлайн чате
                </label>
                <button>Сохранить</button>
            </div>
        </form>
    </div>



    <div id="editBlock">
        <div class="my-profile-title">
            <h1>Редактировать профиль</h1>
            <button id="editBlockBack">назад</button>
        </div>
        <form action="">
            <div class="accounts-inputs">
                <div>
                    <label for="">
                        Фамилия
                        <input required type="text" placeholder="Укажите вашу фамилию">
                    </label>
                    <label for="">
                        Телефон
                        <input required type="text" placeholder="Укажите ваш телефон">
                    </label>
                    <label for="">
                        Страна
                        <input required type="text" placeholder="Где вы находитесь?">
                    </label>
                    <label for="">
                        Логин
                        <input required type="text" placeholder="Придумайте логин">
                    </label>
                </div>
                <div>
                    <label for="">
                        Имя
                        <input required type="text" placeholder="Укажите ваше имя">
                    </label>
                    <label for="">
                        Эл.почта
                        <input required type="text" placeholder="Укажите вашу эл.почту">
                    </label>
                    <label for="">
                        Город/район
                        <input required type="text" placeholder="В каком городе/районе?">
                    </label>
                    <label for="">
                        Пароль
                        <input required type="text" placeholder="Придумайте пароль">
                    </label>
                </div>
            </div>

        </form>
        <div class="accounts-pay">
            <img src="./images/myprofile/icons/pay.png" alt="pay.png">
            <div class="accounts-pay-buttons">
                <button id="saveButton">Сохранить</button>
            </div>
        </div>
    </div>
</div>

<script src="./scripts/myprofile/app.js"></script>
</body>
</html>
