$('#enter').on('click', ()=>{
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
    if(validateEmail(mail)){
        console.log("email введен верно");
    }
    else {
        document.getElementById("email-error").innerHTML = "Неверно введенный email"
    }
    if (login.length < 3 || login.length > 25){
        document.getElementById("login-error").innerHTML = "Длина логина должна быть от 3 до 25 символов"
    }
    if (password.length < 3 || password.length > 25){
        document.getElementById("password-error").innerHTML = "Длина пароль должна быть от 3 до 25 символов"
    }
    debugger;
    if(validateEmail(mail) && !(login.length < 3 || login.length > 25) && !(password.length < 3 || password.length > 25)){
        var jsson = {
            'email': mail,
            'login': login,
            'password': password,
        };
        $.ajax({
            url:"../fitnessProject/connectionDB.php",
            type: "POST",
            data: jsson,
            success:(data)=>{

            },
            error:(e)=>{
                console.log("Не удалось подключиться к базе данных");
            }
        });
    }
});
$(".auth-block-click").click((e)=>{
    console.log($(this).id);
});
function haveNotAccount(){
    document.location.href = "../fitnessProject/registration.php";
}
function haveAccount(){
    document.location.href = "../fitnessProject/authorization.php";
}