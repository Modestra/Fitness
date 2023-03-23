<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="icon" href="../fitnessProject/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../fitnessProject/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/authStyle.css">
    <link rel="stylesheet" href="styles/mainStyle.css">
    <link rel="stylesheet" href="styles/notificationStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
    <section class="notification-list">
    </section>
    <form id="auth" class="auth">
        <div class="auth-text-border">
            Авторизация
        </div>
        <div class="auth-block">
            <input class="input-login" type="text" name="login" id="login" placeholder="Введите логин">
            <p id="login-error" class="error-text"></p>
        </div>
        <div class="auth-block">
            <input class="input-pass" type="password" name="password" id="password" placeholder="Введите пароль">
            <p id="password-error" class="error-text"></p>
        </div>
        <button id="enter" class="auth-sumbit" type="submit">Войти</button>
        <p class="registration-link" onclick="haveNotAccount()">Нет аккаунта?</p>
        <div class="auth-another-links"></div>
    </form>
    <script src="lib/jquery/jquery-3.6.3.min.js"></script>
    <script src="scripts/authreg.js"></script>
</body>
</html>