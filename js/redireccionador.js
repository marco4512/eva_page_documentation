
var x=1;
var vista_frame = document.getElementById('vista_frame');
var todas_las_pag= document.getElementById('todas_las_pag');
var iframe_menu_lateral = document.getElementById("iframe_menu_lateral");
var menu_lateral = document.getElementById("menu_lateral");
var boton_desplegar = document.getElementById("boton_desplegar");
var height=screen.height-240+'px';
function cargar_pagina(direc){
    iframe_menu_lateral.style.display = 'none';
    menu_lateral.style.width = '30px';
    menu_lateral.style.animationName='wipe-out-left';
    boton_cerrar.style.display = 'none';
    boton_desplegar.style.display = 'block';
    vista_frame.src = direc;
    window.frames("vista_frame").location.reload;

}