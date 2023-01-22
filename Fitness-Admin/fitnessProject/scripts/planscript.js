document.addEventListener("DOMContentLoaded", ()=>{
    console.log("Скрипт запущен, скрипт работает на системе: " + navigator.language);
});
function createTran(){
    let list = document.getElementById('plan-list');
    if(list.children.length < 7)
    {
        let div = document.createElement('div');
        div.className = "trains-types-element";
        div.innerText = "Тренировка";
        list.prepend(div);
    }
    else {

    }
}