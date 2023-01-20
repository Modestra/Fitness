$(document).ready(()=>{
    var block = document.querySelector('.error-text').getAttribute('data-attr');
    console.log(block);
});
function haveNotAccount(){
    document.location.href = "../fitnessProject/registration.html";
}
function haveAccount(){
    document.location.href = "../fitnessProject/authorization.html";
}