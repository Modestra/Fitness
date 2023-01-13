var phplink = "../fitnessProject/connectionDB.php";
var xtp = new XMLHttpRequest();

$(document).ready(()=>{
    $('#enter').on('click', ()=>{
        xtp.open("GET", phplink);
        xtp.send();
        if(xtp.status != 404){

        }
        else {

        };
    });
});
function registration(){
    document.location.href = "../fitnessProject/registration.html";
}
function authorisation(){
    document.location.href = "../fitnessProject/authorization.html";
}