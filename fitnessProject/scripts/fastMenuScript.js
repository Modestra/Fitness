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
    document.location.href = '../fitnessProject/trainingPlans.html';
}
function fastmenuwork() {
    if (getCookie("sex") == "male"){
        document.location.href = '../fitnessProject/trainslist.html';
    }
    else {
        document.location.href = '../fitnessProject/trainslistFemale.html';
    }
}
function fastmenucabinet(){
    if(getCookie("account") != null){
        document.location.href = "../fitnessProject/personalAccount.html";
    }
    else {
        document.location.href = "../fitnessProject/authorization.html";
    }
}
function ComeToMain(){
    document.location.href = "../fitnessProject/main.html";
}
function authorization(){
    document.location.href = "../fitnessProject/authorization.html";
}