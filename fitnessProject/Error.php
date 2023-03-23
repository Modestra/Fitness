<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
    <link rel="stylesheet" href="styles/mainStyle.css">
    <link rel="stylesheet" href="styles/headStyle.css">
    <link rel="stylesheet" href="styles/errorStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
    <header class="main-hat-block">
        <div class="main-hat">
            <img src="../../test/bitrix/templates/test/images/лого.svg" alt="">
            <p class="main-hat-title">GYM LAUNCH</p>
            <div id="search" class="main-hat-search" onclick="searchClick()">
                <img src="../../test/bitrix/templates/test/images/loupe.png" alt="">
            </div>
            <div class="main-hat-menu">
                <p class="main-hat-menu-name">Меню</p>
                <div class="main-hat-menu-lines">
                    <div class="main-hat-menu-line-1"></div>
                    <div class="main-hat-menu-line-2"></div>
                    <div class="main-hat-menu-line-3"></div>
                </div>
            </div>
            <div class="main-hat-enter" onclick="comeToAuth()">
                <p class="main-hat-enter-name">Войти</p>
            </div>
        </div>
    </header>
    <div class="main-content-block">
        <div class="error-block">
            <p class="error-block-404">404</p>
            <p class="error-block-text">Ошибка</p>
            <p class="error-block-nonlink">Такой страницы не существует</p>
            <p class="error-block-back">Вы можете вернуться на</p>
            <a class="error-block-back-link" href="main.html">главную страницу</a>
        </div>
    </div>
    <div class="foot-content">
        <div class="foot-content-contacts-info">
            <div class="foot-content-contacts">
                <div class="foot-content-contacts-text">
                    <a>О Нас</a>
                    <a>Реклама на сайте</a>
                    <a>E-mail</a>
                </div>
                <div class="foot-content-contacts-links">
                    <a><img src="../../test/bitrix/templates/test/images/socials.png" alt=""></a>
                    <a><img src="../../test/bitrix/templates/test/images/socials2.png" alt=""></a>
                    <a><img src="../../test/bitrix/templates/test/images/socials3.png" alt=""></a>
                    <a><img src="../../test/bitrix/templates/test/images/socials4.png" alt=""></a>
                    <a><img src="../../test/bitrix/templates/test/images/socials5.png" alt=""></a>
                </div>
            </div>
            <!--Все права защищены. Использование материалов нашего сайта возможно только с указанием ссылки на принадлежность их к нашему сайту -->
        </div>
    </div>
</body>

</html>