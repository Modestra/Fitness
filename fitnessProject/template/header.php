<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>GymLaunch</title>
    <link rel="icon" href="/fitnessProject/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/fitnessProject/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/authStyle.css">
    <link rel="stylesheet" href="./styles/mainStyle.css">
    <link rel="stylesheet" href="./styles/headStyle.css">
    <link rel="stylesheet" href="./styles/traintlistStyle.css">
    <link rel="stylesheet" href="./styles/plansStyle.css">
    <link rel="stylesheet" href="./styles/bicepsExercisesStyle.css">
    <link rel="stylesheet" href="./styles/notificationStyles.css">
    <!-- Мобильные стили  -->
    <link rel="stylesheet" href="./styles/mobile/authmobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
<header class="main-hat-block">
    <div class="main-hat">
        <img src="./images/лого.svg">
        <p class="main-hat-title">GYM LAUNCH</p>
        <div id="menu" class="main-hat-menu">
            <p class="main-hat-menu-name">Меню</p>
            <div class="main-hat-menu-lines">
                <div class="main-hat-menu-line-1"></div>
                <div class="main-hat-menu-line-2"></div>
                <div class="main-hat-menu-line-3"></div>
            </div>
        </div>
        <div class="main-hat-enter" onclick="authorization()">
            <p class="main-hat-enter-name">Войти</p>
        </div>
    </div>
</header>
