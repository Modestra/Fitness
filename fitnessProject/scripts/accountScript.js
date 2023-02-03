function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
}
function readCookie(cname) {
    var name = cname + "=";
    var decoded_cookie = decodeURIComponent(document.cookie);
    var carr = decoded_cookie.split(';');
    for(var i=0; i<carr.length;i++){
        var c = carr[i];
        while(c.charAt(0)==' '){
            c=c.substring(1);
        }
        if(c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
$(document).ready(()=>{
    if(navigator.cookieEnabled == true)
    {
        if(getCookie("account") != null){
            document.getElementsByClassName(".main-hat-enter-name").innerText = "test";
            $("#login").innerText = "Имя";
        }
        else {
            $('.main-hat-enter-name').innerText = "Войти";
        }
    }
    else {
        alert("Включите Cookies ля корректной работы сайта");
    }
});