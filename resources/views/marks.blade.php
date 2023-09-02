<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оценки</title>
    <link rel="stylesheet" href="./styles/marks/style.css">
    <link rel="stylesheet" href="./styles/marks/tablet/style-tablet.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-logo">
        <img src="./images/marks/desktop/logo.png" alt="logo" class="logo">
        <img src="./images/marks/desktop/text-logo.png" alt="text-logo" class="text-logo">
    </div>
    <div class="header-info">
        <p>Техническая поддержка: student@skillgate.tj</p>
        <div class="header-info-cabinet">
            <img src="./images/marks/icons/user.png" alt="">

            <ul class="cabinet-menu">
                <li class="dropdown"><a href="#">Махмудов Сорбон</a>
                    <ul class="dropdown-content">
                        <li><img src="./images/marks/icons/cabinet-user.png" alt=""><a href="#">Мой профиль</a></li>
                        <li><img src="./images/marks/icons/cabinet-settings.png" alt=""><a href="#">Настройки</a></li>
                        <li id="exit"><img src="./images/marks/icons/cabinet-exit.png" alt="" > <a href="#">Выход</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="side-bar">
    <div class="side-bar-info">
        <img src="./images/marks/icons/side-user.png" alt="side-user.png">
        <h2>Махмудов Сорбон</h2>
        <p>Уровень: Beginner - Elementary</p>
    </div>
    <div class="side-bar-menu">
        <ul>
            <li><img src="./images/marks/icons/side-main.png" alt="side-main.png"><a href="">Главная</a></li>
            <li><img src="./images/marks/icons/side-course.png" alt="side-course.png"><a href="">Курс</a></li>
            <li><img src="./images/marks/icons/side-marks.png" alt="side-marks.png"><a href="">Оценки</a></li>
        </ul>
    </div>
    <div class="side-bar-nav">
        <div class="side-bar-nav-container">
            <div>
                <p>Грамматика</p>
                <img src="./images/marks/icons/nav-grammar.png" alt="nav-grammar.png">
            </div>
            <div>
                <p>Видео</p>
                <img src="./images/marks/icons/nav-video.png" alt="nav-video.png">
            </div>
            <div>
                <p>Словарь</p>
                <img src="./images/marks/icons/nav-vocab.png" alt="nav-vocab.png">
            </div>
            <div>
                <p>Эл. книги</p>
                <img src="./images/marks/icons/nav-elbook.png" alt="nav-elbook.png">
            </div>
            <div>
                <p>Аудиокниги</p>
                <img src="./images/marks/icons/nav-audiobook.png" alt="nav-audiobook.png">
            </div>
            <div>
                <p>Музыка</p>
                <img src="./images/marks/icons/nav-music.png" alt="nav-music.png">
            </div>
            <div>
                <p>Фильмы</p>
                <img src="./images/marks/icons/nav-movie.png" alt="nav-movie.png">
            </div>
            <div>
                <p>Онлайн чат</p>
                <img src="./images/marks/icons/nav-chat.png" alt="nav-chat.png">
            </div>
            <div>
                <p>Cпикинг клуб</p>
                <img src="./images/marks/icons/nav-spclub.png" alt="nav-spclub.png">
            </div>

        </div>
    </div>
    <div class="side-bar-footer">
        <p>Для связи:
            (+992) 987 65 4321</p>
        <p>Мы в социальных сетях:</p>
        <img src="./images/marks/icons/side-social.png" alt="side-social.png">
    </div>
</div>

<div class="marks">
    <div class="marks-title">
        <h1>Оценки</h1>
    </div>
    <div class="marks-content">
        <div class="marks-content-title">
            <h1>Тесты</h1>
            <form action="">
                <select name="" id="">
                    <option value="">
                        Выбрать урок
                    </option>
                </select>
            </form>
        </div>
        <table>
            <tr>
                <th>Название тестов</th>
                <th>Баллы</th>
            </tr>
            <tr>
                <td>Тест №1: Выбрать правильный вариант артикла для предложений</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Тест №2: Написать правильно предложения</td>
                <td>6</td>
            </tr>
            <tr>
                <td>Тест №3: Словарный тест</td>
                <td>Не пройдено</td>
            </tr>
        </table>
    </div>
</div>


<script src="./scripts/marks/app.js"></script>
</body>
</html>
