function createTran(){
    const trainslist = document.querySelector('#trains')
    const train = document.createElement('div').classList.add("trains-types-element")
    const newtrain = document.createElement('div').classList.add("trains-types-element-new")
    this.remove()
    train.appendChild(trainslist)
    newtrain.appendChild(trainslist)
}