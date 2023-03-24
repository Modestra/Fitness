<?php require("./template/header.php") ?>
    <header class="main-hat-block">
        <div class="main-hat">
            <img src="../../test/bitrix/templates/test/images/лого.svg">
            <p class="main-hat-title">GYM LAUNCH</p>
            <div class="main-hat-menu">
                <p class="main-hat-menu-name">Меню</p>
                <div class="main-hat-menu-lines">
                    <div class="main-hat-menu-line-1"></div>
                    <div class="main-hat-menu-line-2"></div>
                    <div class="main-hat-menu-line-3"></div>
                </div>
            </div>
        </div>
        <div class="fastmenu" id="personal">
            <div class="fastmenu-plan" onclick="fastmenuplan()">План тренировок</div>
            <div class="fastmenu-work" onclick="fastmenuwork()">Упражнения</div>
            <div class="fastmenu-cabinet" onclick="fastmenucabinet()">Личный Кабинет</div>
        </div>
    </header>
    <script src="scripts/headScript.js"></script>
    <main class="main-content-block">
        <div class="backmenu" onclick="ComeToMain()">
            <img src="../../test/bitrix/templates/test/images/mainhome.png">
        </div>
        <div class="content-width">
            <div class="account-head">
                <p>Личный кабинет</p>
            </div>
            <section class="account-content">
                <div class="account-content-block">
                    <div class="account-face">
                        <img src="../../test/bitrix/templates/test/images/лого.png" alt="ava">
                    </div>
                    <div id="login" class="account-name">Ник</div>
                    <div class="all-purpose">
                        <div class="account-purpose">Мои цели</div>
                        <input type="text" class="account-myPurpose">
                    </div>

                    <a class="favourites-btn" href="#">Избранное</a>
                </div>

                <div class="table">
                    <div class="account-content-block1">
                        <div class="table-parameters">
                            <div class="table-parameters-head">
                                <p>Мои параметры</p>
                            </div>
                            <div class="table-parameters-block">
                                <div>
                                    <ul class="table-parameters-column">
                                        <li class="table-li"><input class="table-parameters-item" type="number" value=""
                                                placeholder="Вес"></li>
                                        <li class="table-li"><input class="table-parameters-item" type="number" value=""
                                                placeholder="Грудь"></li>
                                        <li class="table-li"><input class="table-parameters-item" type="number" value=""
                                                placeholder="Талия"> </li>

                                    </ul>
                                    <div class="table-parameters-date">Дата</div>
                                </div>

                                <ul class="table-parameters-column">
                                    <li class="table-li"><input class="table-parameters-item" type="number" value=""
                                            placeholder="Бедра"></li>
                                    <li class="table-li"><input class="table-parameters-item" type="number" value=""
                                            placeholder="Икры"></li>
                                    <li class="table-li"><input class="table-parameters-item" type="number" value=""
                                            placeholder="Бицепс"></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="account-content-block2">
                        <div class="table-parameters">
                            <div class="table-parameters-head">
                                <p>История изменений</p>
                            </div>

                            <div class="table-parameters-block">
                                <div>
                                    <ul class="table-parameters-column">
                                        <li class="table-li">
                                            <div class="table-parameters-item">Вес </div>
                                        </li>
                                        <li class="table-li">
                                            <div class="table-parameters-item">Грудь </div>
                                        </li>
                                        <li class="table-li">
                                            <div class="table-parameters-item">Талия </div>
                                        </li>

                                    </ul>
                                    <div class="table-parameters-date">Дата</div>
                                </div>

                                <ul class="table-parameters-column">
                                    <li class="table-li">
                                        <div class="table-parameters-item">Бедра </div>
                                    </li>
                                    <li class="table-li">
                                        <div class="table-parameters-item">Икры </div>
                                    </li>
                                    <li class="table-li">
                                        <div class="table-parameters-item">Бицепс </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>
<?php require("./template/footer.php") ?>