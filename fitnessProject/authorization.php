<?php require("./template/header.php")?>
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
    <script src="lib/jquery-3.6.3.min.js"></script>
    <script src="scripts/authreg.js"></script>
<?php require("./template/footer.php")?>