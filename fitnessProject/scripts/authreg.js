$(document).ready(()=>{
    $(".auth").load("../fitnessProject/connectionDB.php")
});
$('#enter').on('clink', ()=>{
    alert("Хуяк");
});
function enterInSite(){
    window.open("D:/Fitness/fitnessProject/main.html")
    this.close()
}
function registration(){
    window.open("D:/Fitness/fitnessProject/registration.html")
    this.close()
}
function authorisation(){
    window.open("D:/Fitness/fitnessProject/authorization.html")
    this.close()
}