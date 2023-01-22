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
$(document).ready(()=>{
    if(navigator.cookieEnabled == true)
    {
        $.ajax({
            url:"../fitnessProject/accountInformation.php",
            type:"GET",
            success:(responce)=>{

            }
        });
    }
    else {
        alert("Включите Cookies ля корректной работы сайта");
    }
});