var mail = $(".input-email").val();
$('#enter').on('click', ()=>{
    const validateEmail = (email) => {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    };
    debugger;
    console.log(mail);
    if(validateEmail(mail)){
        console.log("0");
    }
    else {
        console.log("1");
    }
});
function haveNotAccount(){
    document.location.href = "../fitnessProject/registration.html";
}
function haveAccount(){
    document.location.href = "../fitnessProject/authorization.html";
}