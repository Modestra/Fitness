let onclick = false;
function searchClick(){
    if(onclick == false){
        document.getElementById("search").classList.add("main-hat-search-click")
        document.getElementById("search-text").classList.remove("main-hat-search-click-back")
        onclick = true
    }
    else {
        document.getElementById("search").classList.add("main-hat-search-click-back")
        document.getElementById("search-text").classList.remove("main-hat-search-click")
        onclick = false
    }
}
function comeToAuth(){
    window.open("D:/Fitness/fitnessProject/authorization.html")
    this.close()
}