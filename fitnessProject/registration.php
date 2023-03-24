<?php require("./template/header.php") ?>
    <form class="auth">
        <p class="auth-text">Регистрация</p>
      <div class="auth-block">
        <input class="input-email" type="text" name="e-mail" id="email" placeholder="Введите email">
          <p id="email-error" class="error-text"></p>
      </div>
      <div class="auth-block">
        <input class="input-login" type="text" name="login" id="login" placeholder="Введите логин">
          <p id="login-error" class="error-text"></p>
      </div>
      <div class="auth-block">
        <input class="input-pass" type="password" name="password" id="password" placeholder="Введите пароль">
          <p id="password-error" class="error-text"></p>
      </div>
      <div class="auth-block-pol">
          <div id="male" class="auth-block-male auth-block-click">
              <p>Мужчина</p>
          </div>
          <div id="female" class="auth-block-female auth-block-click">
              <p>Женщина</p>
          </div>
      </div>
        <input id="enter" class="auth-sumbit" type="submit" value="Зарегестрироваться">
        <div class="registration-link" onclick="haveAccount()">Есть аккаунт?</div>
        <p id="regError" class="error-text"></p>
        <div class="auth-another-links"></div>
    </form>
<?php require("./template/footer.php") ?>