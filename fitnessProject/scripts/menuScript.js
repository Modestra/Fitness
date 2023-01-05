$(document).ready(()=>{
    console.log('Скрипт jquery запущен');
    $('#fastmenu').hide();
    $('#menu').on('click', ()=>{
        if($('#fastmenu').is(":visible")){
            $('#fastmenu').hide(500);
        }
        else {
            $('#fastmenu').show(500);
        }
    });
});
function fastmenuplan(){
    window.open('../fitnessProject/trainingPlans.html')
    this.close()
}
function fastmenuwork(){
    window.open('../fitnessProject/trainslist.html')
    this.close()
}
function fastmenucabinet(){
    window.open('../fitnessProject/usercabinet.html')
    this.close()
}