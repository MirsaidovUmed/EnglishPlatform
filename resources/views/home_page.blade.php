<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./styles/homepagemodal/style.css">
    <link rel="stylesheet" href="./styles/homepagemodal/tablet/style-tablet.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="country-mw">
        <h2>Откуда вы?</h2>
        <form action="">
            <div class="countries">
                <div>
                    <label for="tjC"><input type="radio" name="country" id="tjC">Таджикистан</label>
                    <label for="ruC"><input type="radio" name="country" id="ruC">Россия</label>
                    <label for="uzC"><input type="radio" name="country" id="uzC">Узбекистан</label>
                    <label for="kzC"><input type="radio" name="country" id="kzC">Казахстан</label>
                    <label for="krC"><input type="radio" name="country" id="krC">Киргизия</label>
                </div>
                <div>
                    <label for="blC"><input type="radio" name="country" id="blC">Беларусь</label>
                    <label for="grC"><input type="radio" name="country" id="grC">Грузия</label>
                    <label for="arC"><input type="radio" name="country" id="arC">Армения</label>
                    <label for="azC"><input type="radio" name="country" id="azC">Азербайджан</label>
                </div>
            </div>
            <button>Выбрать</button>
        </form>
    </div>

</div>
<script src="./scripts/homepagemodal/app.js"></script>
</body>
</html>
