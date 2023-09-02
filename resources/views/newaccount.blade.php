<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account</title>
    <link rel="stylesheet" href="./styles/newaccount/style.css">
    <link rel="stylesheet" href="./styles/newaccount/tablet/style-tablet.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<div class="side-bar">
    <div class="side-bar-logo">
        <img src="./images/newaccount/desktop/side-bar-logo.png" alt="logo.png" id='sideBarLogo'>
        <img src="./images/newaccount/desktop/side-bar-text-logo.png" alt="text-logo.png" id="sideBarTextLogo">
    </div>
    <div class="side-bar-pay">
        <h2>Новая учетная запись</h2>
        <p>Для  доступа к курсам Вам необходимо сначала создать учетную запись.</p>
    </div>
    <div class="side-bar-accyet">
        <h2>Уже есть аккаунт?</h2>
        <button><a href="#">Перейти на страницу входа</a></button>
    </div>
    <div class="side-bar-footer">
        <p>Мы в социальных сетях:</p>
        <img src="./images/newaccount/icons/side-social.png" alt="side-social.png">
    </div>
</div>



<div class="new-account">
    <div class="new-account-title">
        <h1>Новая учетная запись</h1>
        <a href="#">Назад</a>
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

        <div class="accounts-pay">
            <div>
                <img src="./images/newaccount/icons/pay.png" alt="pay.png">
                <div>
                    <p>Формат jpeg, png</p>
                    <p>Не более 2 мб</p>
                </div>
            </div>
            <button>Перейти к оплате</button>
        </div>
    </form>
</div>


<script src="./scripts/newaccount/app.js"></script>
</body>
</html>
