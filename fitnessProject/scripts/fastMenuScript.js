$(document).ready(()=>{
    var enter = document.getElementsByClassName('main-hat-enter-name');
    console.log('Скрипт jquery запущен');
    $('.fastmenu').hide();
    $('.main-hat-menu').on('click', ()=>{
        if($('.fastmenu').is(":visible")){
            $('.fastmenu').hide(500);
        }
        else {
            $('.fastmenu').show(500);
        }
    });
    if(getCookie("account") != null){
        $('.main-hat-enter p').text("Выйти");
    }
    else {
        $('.main-hat-enter p').text("Войти");
    }
});
function fastmenuplan(){
    document.location.href = '../fitnessProject/trainingPlans.php';
}
function fastmenuwork() {
    if (getCookie("sex") == "male"){
        document.location.href = '../fitnessProject/trainslist.php';
    }
    else {
        document.location.href = '../fitnessProject/trainslistFemale.php';
    }
}
function fastmenucabinet(){
    if(getCookie("account") != null){
        document.location.href = "../fitnessProject/personalAccount.php";
    }
    else {
        document.location.href = "../fitnessProject/authorization.php";
    }
}
function ComeToMain(){
    document.location.href = "../fitnessProject/main.php";
}
function authorization(){
    document.location.href = "../fitnessProject/authorization.php";
}