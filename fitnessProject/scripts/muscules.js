const idcontent = document.querySelector(".error-text");
$('.body-map__muscle').mouseover(function() {
    idcontent.innerHTML = this.id;
});
$('.body-map__muscle').onclick(()=>{
    document.location.href = idcontent.val();
});