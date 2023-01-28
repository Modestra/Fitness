const selectableVideos = document.getElementById("select");
$(document).ready(()=>{
    console.log(selectableVideos.children.length);
    for(let i= 0; i < selectableVideos.children.length; i++){
    }
});
function activateSelectable(obj){
    obj.classList.add('main-content-block-selectable-icon-active');
    setTimeout(activateSelectable(obj), 3000);
}
function removeSelectable(obj){
    obj.classList.remove('main-content-block-selectable-icon-active');
    setTimeout(removeSelectable(obj), 3000);
}
function auth(){
    document.location.href = "../fitnessProject/registration.html";
}