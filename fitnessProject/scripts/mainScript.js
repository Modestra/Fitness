const selectableVideos = document.getElementById("select");
$(document).ready(()=>{
    console.log(selectableVideos.children.length);
    for(let i= 0; i < selectableVideos.children.length; i++){
    }
});
function registation(){
    document.location.href = "../fitnessProject/registration.html";
}