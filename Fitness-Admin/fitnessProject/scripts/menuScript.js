$(document).ready(()=>{
    console.log('Скрипт jquery запущен');
    $('.fastmenu').hide();
    $('#menu').on('click', ()=>{
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
    document.location.href = '../fitnessProject/usercabinet.html';
    this.close()
}