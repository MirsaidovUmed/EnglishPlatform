<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./styles/homepage/style.css">
    <link rel="stylesheet" href="./styles/homepage/tablet/style-tablet.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-number">
        <p>(+992) 987 65 4321</p>
    </div>
    <div class="header-menu">
        <ul class="menu">
            <li><a href="#">About us</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
    </div>
    <div class="login">
        <img src="./images/homepage/icons/header-login.png" alt="">
        <a href="">Log in</a>
    </div>
</header>

<main>
    <div class="main-container">
        <div class="container-logo">
            <img src="./images/homepage/desktop/container-logo.png" alt="container-logo.png" id="containerLogo">
            <img src="./images/homepage/desktop/container-text-logo.png" alt="container-text-logo.png" id="containerTextLogo">
        </div>
        <div class="container-select">
            <h1>Select your language to study</h1>
            <div class="select-buttons">
                <div class="select-buttons-first">
                    <button><img src="./images/homepage/icons/main-uk.png" alt="container-uk.png">Англисӣ</button>
                    <button><img src="./images/homepage/icons/main-uk.png" alt="container-uk.png">Английский</button>
                    <button><img src="./images/homepage/icons/main-uk.png" alt="container-uk.png">Ingilizce</button>
                    <button><img src="./images/homepage/icons/main-uk.png" alt="container-uk.png">Englisch</button>
                    <button><img src="./images/homepage/icons/main-uk.png" alt="container-uk.png">英语</button>
                </div>

                <div class="select-buttons-second">
                    <button id="tj"><img src="./images/homepage/icons/main-tj.png" alt="main-tj.png">Тоҷикӣ</button>
                    <button id="ru"><img src="./images/homepage/icons/main-ru.png" alt="main-ru.png">Русский</button>
                    <button id="tr"><img src="./images/homepage/icons/main-tr.png" alt="main-tr.png">Türk</button>
                    <button id="gr"><img src="./images/homepage/icons/main-gr.png" alt="main-gr.png">Deutsch</button>
                    <button id="ch"><img src="./images/homepage/icons/main-ch.png" alt="main-ch.png">中国人</button>
                </div>

            </div>
        </div>
    </div>
</main>


<footer>
		<span>
			<p>Copyright 2022. All right reserved</p>
		</span>
    <span>
			<h2>Easy, accessible and interesting</h2>
		</span>
    <span>
			<img src="./images/homepage/icons/side-social.png" alt="side-social.png">
		</span>
</footer>
<script src="./scripts/homepage/app.js"></script>
</body>
</html>
