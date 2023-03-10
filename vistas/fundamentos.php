<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only Bootstrap -->
        <link rel="stylesheet" type="text/css" href="../style/style.css" media="screen" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
</head>
<body id="vistas_body">
<div class="BarraProgreso">
        <div id="ProgresPage" class="Barra" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    <!--Se crea el div principal que abarca toda la pagina-->
    <div class="contenedor_principal">
        <div class="contenedor_secundario">
            <br>
            <p class="Titulos_responsivos"><strong>Fundamentos</strong></p>
            <div class="Separdor_de_titulos"></div>
            <div class="Separdor_de_titulos_bajo"></div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%; color:#5B5858">

                <div id="imagen_no_wrap" class="contenedor_imagen">
                    <object data="../img/undraw_launching_re_tomg.svg"></object>
                </div>
                <div class="contenedor_texto">

                    <p style="text-align: justify; font-size: 20px; margin:0;">
                        En esta sección puedes encontrar los fundamentos necesarios para entender todo lo vital para
                        crear un chatbot desde 0.
                        La intención de esta sección es dar a conocer tanto las estructuras de los chatbots como la
                        forma en la que se relacionan con la comunicación humana.

                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <p class="Titulos_responsivos"><strong>Indice</strong></p>
                <div class="Separdor_de_titulos"></div>
                <div class="Separdor_de_titulos_bajo"></div>
                <div class="contenedor_texto">
                    <p style="text-align: center; font-size: 20px; color:#5B5858">
                        Aquí puedes encontrar la lista de temas necesarios para tener los fundamentos de esta
                        documentación.
                        Y ver tu progreso
                    </p>
                </div>
            </div>
            <div class="indice_contenedor">
                    <div id="uno_intro" class="indice_introduccion">
                        <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                            <div class="contenedor_texto"> 
                                <ul class="lista_temas">
                                    <li><a class="tema" href="introduccion.php">Introducción</a></li>
                                        <dd><a class="sub_tema" href="introduccion.php">1.- Bienvenida</a></dd>
                                        <dd><a class="sub_tema" href="introduccion.php#queEs">2.- ¿Qué es esta Pagína?</a></dd>
                                        <dd><a class="sub_tema" href="introduccion.php#comofun">3.- ¿Cómo se estructura la pagína?</a></dd>
                                        <dd><a class="sub_tema" href="introduccion.php#panoama">4.- Panorama general y alcances esperados.</a></dd>
                                        <dd><a class="sub_tema" href="introduccion.php#Trabajos">5.- Trabajos previos e investigaciones que aportan al proyecto</a></dd>
                                </ul>
                            </div>
                            <div class="contenedor_imagen" >
                                <object data="../img/undraw_stars_re_6je7.svg"></object> 
                            </div>
                        </div>
                    </div>
                    <div id="controles_intro" class="controles">
                        <div></div>
                        <div></div>
                        <button id="estado_del_arte_control" onclick="desplazar('estado_del_arte')">
                            Estado del arte
                        </button>
                    </div>
            
                <div id="uno_estado" class="indice_introduccion">
                    <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                        <div class="contenedor_texto"> 
                            <ol class="lista_temas">
                                <li><a class="tema" href="estado_del_arte.php">Estado del arte de los chatbots en 2022</a></li>
                                <dd><a class="sub_tema" href="estado_del_arte.php#Estado_del_arte">1.- ¿Qué es un chatbot?</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#tipos_de_chats">2.- Tipos de chatbots</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#como_funcionan">3.- ¿Cómo funciona un chatbot?</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#características">4.- Características de los chatbots</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#tipo_de_plataformas">5.- Plataformas que ayudan con la creación de bots</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#Uso_de_los_chatboots">6.- Uso de los chatbots</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#limitaciones_de_los_chat_boots">7.- Limitaciones de los chatbots no code</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#ejemplos_de_chatboots">8.- Ejemplos del uso de chatbots</a></dd>
                                <dd><a class="sub_tema" href="estado_del_arte.php#resuelve_el_problema">9.- ¿Es un chatbot una solución a mi problema?</a></dd>
                            </ol>
                        </div>
                        <div class="contenedor_imagen" >
                            <object data="../img/undraw_art_museum_-8-or4.svg"></object> 
                        </div>
                    </div>
                    
                </div>
                <div id="controles_estado" class="controles">
                        <button onclick="desplazar('introduccion')" id="estado_del_arte_control" >
                            Introduccíon
                        </button>
                        <div></div>
                        <button id="estado_del_arte_control" onclick="desplazar('Dialog')">
                            Todo sobre Dialogflow
                        </button>
                </div>
                <!--dialog flow-->
                <div id="dialog_indice" class="indice_dialog">
                    <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                        <div class="contenedor_texto"> 
                            <ol class="lista_temas">
                                        <li><a class="tema" href="todo_sobre_dialog.php">Todo sobre Dialog flow</a></li>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#¿que_es_dialog?" >1.- ¿Qué es diálogo flow?</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#donde_surge?" >2.- ¿De dónde surge?</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#como_esta_conformado?" >3.- ¿Cómo está conformado Dialog Flow?</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#intenciones" >4.- Intenciones</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#entidades" >5.- Entidades</a> </dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#contextos" >6.- Contextos</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#agentes" >7.- Agentes</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#Fulfilment">8.- Fulfilment</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#Respuesta_de_webhook">9.- Respuesta de webhook</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#Integraciones" >10.- Integraciones</a></dd>
                                        <dd><a class="sub_tema" href="todo_sobre_dialog.php#Prácticas_recomendadas" >11.- Prácticas recomendadas</a></dd>
                            </ol>
                        </div>
                        <div class="contenedor_imagen" >
                            <object data="../img/undraw_mobile_testing_re_w7yb.svg"></object> 
                        </div>
                    </div>
                    
                </div>
                <div id="controles_dialog" class="controles">
                        <button onclick="desplazar('estado_del_arte')" id="estado_del_arte_control" >
                            Estado del arte
                        </button>
                        <div></div>
                        <div></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
<script src="../js/progreso.js">   </script>
<script src="../js/carrusel.js">   </script>

</html>