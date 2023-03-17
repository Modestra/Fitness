$('#enter').on('click', ()=>{
    debugger;
    var regError = $("#regError");
    var mail = $(".input-email").val();
    var login = $(".input-login").val();
    var password = $(".input-pass").val();
    const validateEmail = (email) => {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    };
    debugger;
    if(validateEmail(mail)){
        console.log("email введен верно");
    }
    else {
        regError.innerHTML = "Неверно введенный email";
        console.log("Неверно введенный email");
    }
    if (login.length < 3 || login.length > 25){
        console.log("Длина логина должна быть от 3 до 25 символов");
    }
    if (password.length < 3 || password.length > 25){
        console.log("Длина пароль должна быть от 3 до 25 символов");
    }
    if(validateEmail(mail) && !(login.length < 3 || login.length > 25) && !(password.length < 3 || password.length > 25)){
        var jsson = {
            'email': mail,
            'login': login,
            'password': password,
        };
        console.log(jsson);
        debugger;
        $.ajax({
            url:"../fitnessProject/connectionDB.php",
            type: "POST",
            data: jsson,
            success:(data)=>{
                document.location.href = data;
            }
        });
    }
});
$(".auth-block-click").on("click", ()=>{

});
function haveNotAccount(){
    document.location.href = "../fitnessProject/registration.html";
}
function haveAccount(){
    document.location.href = "../fitnessProject/authorization.html";
}