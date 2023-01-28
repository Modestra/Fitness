function get_cookie (cookie_name)
{
    var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

    if ( results )
        return ( unescape ( results[2] ) );
    else
        return null;
}
$(document).ready(()=>{
    console.log("trainsScript запущен");
    document.title = "Упражнение на " + get_cookie("train");
    document.getElementById('train-name').innerText = "Упражнения на " + get_cookie("train");
    debugger;
    var name_1 = get_cookie('train') + "_1";
    var name_2 = get_cookie('train') + "_2";
    var name_3 = get_cookie('train') + "_3";
    $.getJSON('../fitnessProject/lib/lessons.json', (data)=>{
        debugger;
        let obj = data.find(muscule => muscule.value === name_1);
        let obj2 = data.find(muscule => muscule.value === name_2);
        let obj3 = data.find(muscule => muscule.value === name_3);
        $.each(data, (key, val)=>{
            document.getElementById('name_1').innerText = obj.name;
            document.getElementById('name_2').innerText = obj2.name;
            document.getElementById('name_3').innerText = obj3.name;

        })
    })
    $(".buttom-like").on("click", ()=>{
        $(this).toggleClass('buttom-like-active');
    });
})