<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Упражнения на бицепс</title>
  <link rel="icon" href="../fitnessProject/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="../fitnessProject/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles/mainStyle.css">
  <link rel="stylesheet" href="styles/headStyle.css">
  <link rel="stylesheet" href="./styles/bicepsExercisesStyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">
</head>

<body>
<header class="main-hat-block">
  <div class="main-hat">
    <img src="images/лого.svg">
    <p class="main-hat-title">GYM LAUNCH</p>
    <div class="main-hat-menu">
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
  <div class="fastmenu">
    <div class="fastmenu-plan" onclick="fastmenuplan()">План тренировок</div>
    <div class="fastmenu-work" onclick="fastmenuwork()">Упражнения</div>
    <div class="fastmenu-cabinet" onclick="fastmenucabinet()">Личный Кабинет</div>
  </div>
</header>
<main class="main-content-block">
  <div class="content-width">
    <div class="biceps-head">
      <p class="biceps-head-text" id="train-name">Упражнения на бицепс</p>
    </div>
    <section class="biceps-content">
      <div class="biceps-content-block">
        <div class="biceps-exercise">
          <div class="biceps-exercise-img">
            <img src="images/nophoto.jpg" id="image_1">
          </div>
        </div>
        <div class="biceps-exercise-block">
          <div class="biceps-exercise-text" id="name_1">Описание</div>
          <button class="buttom-like">
            <img src="./images/like.png" alt="like">
          </button>
        </div>
      </div>
      <div class="biceps-content-block">
        <div class="biceps-exercise">
          <div class="biceps-exercise-img">
            <img src="images/nophoto.jpg" id="image_2">
          </div>
        </div>
        <div class="biceps-exercise-block">
          <div class="biceps-exercise-text" id="name_2">Описание</div>
          <button class="buttom-like">
            <img src="./images/like.png" alt="like">
          </button>
        </div>
      </div>
      <div class="biceps-content-block">
        <div class="biceps-exercise">
          <div class="biceps-exercise-img">
            <img src="images/nophoto.jpg" id="image_3">
          </div>
        </div>
        <div class="biceps-exercise-block">
          <div class="biceps-exercise-text" id="name_3">Описание</div>
          <button class="buttom-like">
            <img src="./images/like.png" alt="like">
          </button>
        </div>
      </div>
    </section>
  </div>
</main>
<footer class="foot-content">
  <div class="foot-content-contacts-info">
    <div class="foot-content-contacts">
      <div class="foot-content-contacts-text">
        <a>О Нас</a>
        <a>Реклама на сайте</a>
        <a>E-mail</a>
      </div>
      <div class="foot-content-contacts-links">
        <a><img src="images/socials.png"></a>
        <a><img src="images/socials2.png"></a>
        <a><img src="images/socials3.png"></a>
        <a><img src="images/socials4.png"></a>
        <a><img src="images/socials5.png"></a>
      </div>
    </div>
    <!--Все права защищены. Использование материалов нашего сайта возможно только с указанием ссылки на принадлежность их к нашему сайту -->
  </div>
</footer>
<script src="lib/jquery/jquery-3.6.3.min.js"></script>
<script src="lib/lessons.json"></script>
<script src="scripts/fastMenuScript.js"></script>
<script src="scripts/trainsScript.js"></script>
</body>

</html>