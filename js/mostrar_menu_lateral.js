var boton_cerrar = document.getElementById("boton_cerrar");
var iframe_menu_lateral = document.getElementById("iframe_menu_lateral");
var menu_lateral = document.getElementById("menu_lateral");
var boton_desplegar = document.getElementById("boton_desplegar");
var height=screen.height-240+'px';
boton_cerrar.addEventListener("click", function () {
    iframe_menu_lateral.style.display = 'none';
    menu_lateral.style.width = '30px';
    menu_lateral.style.animationName='wipe-out-left';
    boton_cerrar.style.display = 'none';
    boton_desplegar.style.display = 'block';
}, false);
boton_desplegar.addEventListener("click", function () {
    iframe_menu_lateral.style.height=height;
    iframe_menu_lateral.style.display = 'block';
    menu_lateral.style.width = '400px';
    boton_cerrar.style.display = 'block';
    boton_desplegar.style.display = 'none';
}, false);