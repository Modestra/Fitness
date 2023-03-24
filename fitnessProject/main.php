<?php require("./template/header.php") ?>
    <div class="fastmenu">
        <div class="fastmenu-plan" onclick="fastmenuplan()">План тренировок</div>
        <div class="fastmenu-work" onclick="fastmenuwork()">Упражнения</div>
        <div class="fastmenu-cabinet" onclick="fastmenucabinet()">Личный Кабинет</div>
    </div>
    <div class="main-content-block">
        <div id="video" class="main-content-block-video">
            <img src="../../test/bitrix/templates/test/images/main/main_1.png">
        </div>
        <ul id="select" class="main-content-block-selectable">
            <li class="main-content-block-selectable-icon"></li>
            <li class="main-content-block-selectable-icon"></li>
            <li class="main-content-block-selectable-icon"></li>
            <li class="main-content-block-selectable-icon"></li>
            <li class="main-content-block-selectable-icon"></li>
        </ul>
        <div class="main-content-block-button">
            <div id="plan" class="main-content-block-button-plan" onclick="fastmenuplan()">
                <p>Выбрать план тренировок</p>
            </div>
            <div id="trains" class="main-content-block-button-trains" onclick="fastmenuwork()">
                <p>Выбрать упражнения</p>
            </div>
        </div>
        <div id="description-block" class="main-content-block-discription">
            <p id="description">Мы даем возможность спортсменам-новичкам и опытным спортсменам получить доступ к структурированной информации о выполнении упражнений, а также к готовым планам тренировок.</p>
        </div>
    </div>
<?php require("./template/footer.php") ?>