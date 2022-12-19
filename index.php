<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
    <title>Eva_boot</title>
    <script src="js/redireccionador.js"></script>
</head>

<body>

    <div class="Barra_nav">
        <div class="contenedor_menu">
            <div class="Imagen_banner">
                <img src="img/logo-apisec.png" alt="logo-apisec">
            </div>
            <div class="menu">
                <ul>
                    <li class="opciones_menu"><a class="texto_opciones_menu" id="todas_las_pag" href="#todas_las_partes" onclick="cargar_pagina('vistas/all_paths.php')">Todas las partes |</a></li>
                    <li class="opciones_menu"><a class="texto_opciones_menu" href="#" onclick="cargar_pagina('vistas/fundamentos.php')">Login |</a></li>
                    <li class="opciones_menu"><a class="texto_opciones_menu" href="">Registrate |</a></li>
                    <li class="opciones_menu"><a class="texto_opciones_menu" href="">Foro |</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <br>

    <div id="menu_lateral" class="menu_lateral">
        <div  id="iframe_menu_lateral" class="menu_lateral_frame"  >
        <div class="Header_Indice">
            <div class="titulo_indice">
                <p> <strong>Indice de navegación</strong></p>
            </div>
       
        </div>
        <hr style="color:white;">
        <ul class="indice_lateral">
            <li>
            <a id="introduccion_click" onclick="despliega('introduccion')"><strong>Introduccion</strong></a>
                <div id="sub_menu_intro">
                    <ol>
                        <li><a onclick="cargar_pagina('vistas/fundamentos.php')" href="#" >Bienvenida </a></li>
                        <li><a onclick="cerrar()" href="Introduccion.html#queEs">¿Qué es este documento? </a></li>
                        <li><a onclick="cerrar()" href="Introduccion.html#comofun">¿Cómo se estructura el documento? </a></li>
                        <li><a onclick="cerrar()" href="Introduccion.html#panoama">Panorama general y alcances esperados. </a></li>
                        <li><a onclick="cerrar()" href="Introduccion.html#Trabajos">Trabajos previos e investigaciones que aportan al proyecto </a> </li>
                    </ol>
                </div>
            </li>
            <li>
                <a id="Estado_click" onclick="despliega('estado')"><strong>Estado del arte de los chatbots en 2022</strong></a>
                    <div id="sub_menu_intro_2">
                        <ol>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#Estado_del_arte" >¿Qué es un chatbot?  </a></li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#tipos_de_chats">Tipos de chatbots </a></li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#como_funcionan">¿Cómo funciona un chatbot?</a></li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#características">Características de los chatbots</a></li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#tipo_de_plataformas">Plataformas que ayudan con la creación de bots </a> </li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#Uso_de_los_chatboots">Uso de los chatbots</a></li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#limitaciones_de_los_chat_boots">Limitaciones de los chatbots no code</a></li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#ejemplos_de_chatboots">Ejemplos del uso de chatbots</a></li>
                            <li><a onclick="cerrar()" href="Estadodelarte.html#resuelve_el_problema">¿Es un chatbot una solución a mi problema? </a></li>
                        </ol>
                    </div>
                </li>
            
        </ul>

        </div>
       
        <div id="boton_cerrar" class="boton_close">
            <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0097 28.9999L0 14.8823L15.0097 0.764648L17.1111 2.77641L4.24025 14.8823L17.1111 26.9882L15.0097 28.9999Z" fill="#4F60FF" />
            </svg>

        </div>
        <div id="boton_desplegar" class="boton_desplegar">
            <svg width="15" height="29" viewBox="0 0 15 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.84211 29L0 26.9337L11.2829 14.5L0 2.06625L1.84211 0L15 14.5L1.84211 29Z" fill="#4F60FF" />
            </svg>
        </div>
    </div>
    <div id='vistas' class="vistas">
        <iframe id='vista_frame' src='vistas/all_paths.php' class='vista_frame' frameborder='0'></iframe>
    </div>
    <script src="js/mostrar_menu_lateral.js"></script>
    <script>
        var height = screen.height - 150 + 'px';
        var vistas = document.getElementById('vistas');
        var vista_frame = document.getElementById('vista_frame');
        vista_frame.style.height = height;
        vistas.style.height = height;
    </script>
    <script src="js/desplazar.js" ></script>

</body>

</html>