var phplink = "../fitnessProject/connectionDB.php";
var xtp = new XMLHttpRequest();
$(document).ready(()=>{
    xtp.open("GET", phplink);
    xtp.send();
    xtp.responseType = "json";
});
function registration(){
    document.location.href = "../fitnessProject/registration.html";
}
function authorisation(){
    document.location.href = "../fitnessProject/authorization.html";
}