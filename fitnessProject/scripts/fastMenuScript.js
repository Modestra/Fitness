$(document).ready(()=>{
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
});
function fastmenuplan(){
    document.location.href = '../fitnessProject/trainingPlans.html';
    this.close()
}
function fastmenuwork(){
    document.location.href = '../fitnessProject/trainslist.html';
    this.close()
}
function fastmenucabinet(){
    if(getCookie("account" != null)){
        document.location.href = "../fitnessProject/personalAccount.html";
    }
    else {
        document.location.href = "../fitnessProject/authorization.html";
    }
}