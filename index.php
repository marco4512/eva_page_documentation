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
                <img src="img/logo-apisec.png" alt="logo-apisec" onclick="cargar_pagina('vistas/all_paths.php')">
            </div>
            <div class="menu">
                <ul>
                    <li class="opciones_menu"><a class="texto_opciones_menu" id="todas_las_pag" href="#" onclick="cargar_pagina('vistas/all_paths.php')">Todas las partes |</a></li>
                    <li class="opciones_menu"><a class="texto_opciones_menu" href="#" onclick="cargar_pagina('vistas/fundamentos.php')">Login |</a></li>
                    <li class="opciones_menu"><a class="texto_opciones_menu" href="#">Registrate |</a></li>
                    <li class="opciones_menu"><a class="texto_opciones_menu" href="#">Foro |</a></li>
                </ul>
            </div>
        </div>
    </div>

    <br>

    <div id="menu_lateral" class="menu_lateral">
        <div id="iframe_menu_lateral" class="menu_lateral_frame">
            <div class="Header_Indice">
                <div class="titulo_indice">
                    <p> <strong>Indice de navegación</strong></p>
                </div>

            </div>
            <hr style="color:white;">
            <ul class="indice_lateral">
                <li>
                    <a id="fundamentos_tema" onclick="despliega('fundamentos')"><strong>Fundamentos</strong></a>
                    <div id="sub_menu_intro">
                        <ol>
                            <li>
                                <a id="fundamentos_tema" onclick="despliega('introduccion')"><strong>Introduccion</strong></a>
                                <div id="sub_menu_intro_fund">
                                    <ol>
                                        <li><a onclick="cargar_pagina('vistas/introduccion.php')" href="#">Bienvenida </a></li>
                                        <li><a onclick="cargar_pagina('vistas/introduccion.php#queEs')" href="#">¿Qué es este documento? </a></li>
                                        <li><a onclick="cargar_pagina('vistas/introduccion.php#comofun')" href="#">¿Cómo se estructura el documento? </a></li>
                                        <li><a onclick="cargar_pagina('vistas/introduccion.php#panoama')" href="#">Panorama general y alcances esperados. </a></li>
                                        <li><a onclick="cargar_pagina('vistas/introduccion.php#Trabajos')" href="#">Trabajos previos e investigaciones que aportan al proyecto</a></li>
                                    </ol>
                                </div>
                            </li>
                            <br>
                            <li>
                                <a id="Estado_click" onclick="despliega('estado')"><strong>Estado del arte de los chatbots en 2022</strong></a>
                                <div id="sub_menu_intro_2">
                                    <ol>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#Estado_del_arte')" href="#">¿Qué es un chatbot? </a></li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#tipos_de_chats')" href="#">Tipos de chatbots </a></li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#como_funcionan')" href="#">¿Cómo funciona un chatbot?</a></li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#características')" href="#">Características de los chatbots</a></li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#tipo_de_plataformas')" href="#">Plataformas que ayudan con la creación de bots </a> </li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#Uso_de_los_chatboots')" href="#">Uso de los chatbots</a></li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#limitaciones_de_los_chat_boots')" href="#">Limitaciones de los chatbots no code</a></li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#ejemplos_de_chatboots')" href="#">Ejemplos del uso de chatbots</a></li>
                                        <li><a onclick="cargar_pagina('vistas/estado_del_arte.php#resuelve_el_problema')" href="#">¿Es un chatbot una solución a mi problema? </a></li>
                                    </ol>
                                </div>
                            </li>
                            <br>
                            <li>
                                <a id="todo_sobre_dialog" onclick="despliega('todo_sobre_dialog')"><strong>Todo sobre Dialog flow</strong></a>
                                <div id="sub_menu_dialog">
                                    <ol>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#¿que_es_dialog?')" href="#">¿Qué es diálogo flow?</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#donde_surge?')" href="#">¿De dónde surge?</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#como_esta_conformado?')" href="#">¿Cómo está conformado Dialog Flow?</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#intenciones')" href="#">Intenciones</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#entidades')" href="#">Entidades</a> </li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#contextos')" href="#">Contextos</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#agentes')" href="#">Agentes</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#Fulfilment')" href="#">Fulfilment</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#Respuesta_de_webhook')" href="#">Respuesta de webhook</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#Integraciones')" href="#">Integraciones</a></li>
                                        <li><a onclick="cargar_pagina('vistas/todo_sobre_dialog.php#Prácticas_recomendadas')" href="#">Prácticas recomendadas</a></li>
                                    </ol>
                                </div>
                            </li>
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
        var height = screen.height - 210 + 'px';
        var vistas = document.getElementById('vistas');
        var vista_frame = document.getElementById('vista_frame');
        vista_frame.style.height = height;
        vistas.style.height = height;
    </script>
    <script src="js/desplazar.js"></script>

</body>

</html>