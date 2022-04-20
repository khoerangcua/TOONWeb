var buymenu = document.getElementById('dropmenu-buy');
var sellmenu = document.getElementById('dropmenu-sell');
var control = document.getElementsByClassName('control-menu');


buymenu.style.display = "none";
sellmenu.style.display = "none";

function sellmenutoggle(inn){
    if(sellmenu.style.display == "none"){
        sellmenu.style.display = "block";
        inn.innerHTML = "Tin đăng bán ▲";
    }else{
        sellmenu.style.display = "none";
        inn.innerHTML = "Tin đăng bán ▼";
    }
}
function buymenutoggle(inn){
    if(buymenu.style.display == "none"){
        buymenu.style.display = "block";
        inn.innerHTML = "Tin đăng mua ▲";
    }else{
        buymenu.style.display = "none";
        inn.innerHTML = "Tin đăng mua ▼";
    }
}