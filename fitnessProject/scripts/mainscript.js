function trains(){
    document.getElementById('select').remove()
    document.getElementById('plan').remove()
    document.getElementById('video').classList.add('main-content-block-video-active')
    document.getElementById('trains').classList.add('main-content-block-button-trains-active')
    let dicription = document.getElementById('description-block')
    dicription.classList.add('main-content-block-description-active')
    let text = document.getElementById('description')
    text.innerText = "Выберите группу мышц"
}