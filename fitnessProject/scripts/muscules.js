const idcontent = document.querySelector(".error-text");
$('.body-map__muscle').mouseover(function() {
    idcontent.innerHTML = this.id;
    document.cookie = "train=" + this.id + ";";
});
$('.body-map__muscle').on("click",()=>{
    document.location.href = "../fitnessProject/bicepsExercises.html";
});