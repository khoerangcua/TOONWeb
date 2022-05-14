var buymenu = document.getElementById('dropmenu-buy');
var sellmenu = document.getElementById('dropmenu-sell');
var control = document.getElementsByClassName('control-menu');


buymenu.style.display = "block";
sellmenu.style.display = "block";

function sellmenutoggle(inn){
    if(sellmenu.style.display == "none"){
        sellmenu.style.display = "block";
        inn.innerHTML = "Bài đăng bán ▲";
    }else{
        sellmenu.style.display = "none";
        inn.innerHTML = "Bài đăng bán ▼";
    }
}
function buymenutoggle(inn){
    if(buymenu.style.display == "none"){
        buymenu.style.display = "block";
        inn.innerHTML = "Bài đăng mua ▲";
    }else{
        buymenu.style.display = "none";
        inn.innerHTML = "Bài đăng mua ▼";
    }
}
