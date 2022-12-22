<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css" media="screen" />
    <title>Eva_boot</title>
</head>

<body id="vistas_body">

    <div class="BarraProgreso">
        <div id="ProgresPage" class="Barra" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="separador_de_pantalla"></div>
    <div class="card_fundamentos">
        <div class="cont_sup_card">
            <div class="cont_tema_logo_nombre">
                <div class="imagen_fundamentos">
                    <object class="imagen_fundamentos_objeto" data="../img/undraw_handcrafts_tree.svg"></object>
                </div>
                <div class="texto_fund">
                    <p>Inicio</p>
                    <p style="font-size: 1.875em; color:black;">Fundamentos</p>
                </div>
                <div class="botones">
                    <div class="ver">
                        <a href="fundamentos.php">
                            <p class="texto_boton">Ver</p>
                        </a>

                    </div>

                    <div class="retomar">
                        <a href="fundamentos.php">
                            <p class="texto_boton">Retomar</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="barra_de_progreso_completa">
        <div id="Progreso_fundamentos"  class="Barra"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        <p >25%</p>
        </div>
        
        <div class="progreso_de_cada_parte">
            <p>En esta sección están todas las partes que constituyen los fundamentos de DialogFlow para que así conozcas todo de esta herramienta.</p>
        </div>
        <br>
    </div>
    <div class="separador_de_pantalla"></div>
    <div class="separador_de_pantalla"></div>
    <div class="card_fundamentos">
        <div class="cont_sup_card">
            <div class="cont_tema_logo_nombre">
                <div class="imagen_fundamentos">
                    <object class="imagen_fundamentos_objeto" data="../img/undraw_building_blocks_re_5ahy (1).svg"></object>
                </div>
                <div class="texto_fund">
                    <p>Diseño</p>
                    <p style="font-size: 1.875em; color:black;">Primera Parte</p>
                </div>
                <div class="botones">
                    <div class="ver">
                        <a href="estructura_videos.php">
                            <p class="texto_boton">Ver</p>
                        </a>

                    </div>

                    <div class="retomar">
                        <a href="estructura_videos.php">
                            <p class="texto_boton">Retomar</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="barra_de_progreso_completa">
        <div id="Progreso_fundamentos"  class="Barra"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        <p >25%</p>
        </div>
        
        <div class="progreso_de_cada_parte">
            <p>Esta  sección está diseñada para que de manera dinámica seas capaz de comprender cómo se diseña un chatbot con Dialogflow.</p>
        </div>
        <br>
    </div>
    <div class="separador_de_pantalla"></div>
   
    <script src="../js/progreso.js"> </script>
    <script>
        var x=0;
        window.onscroll = function() {
        var y = window.scrollY;
            if(y>=x){
                console.log("bajando");
                window.scroll({
                top: 700,
                behavior: 'auto'

                });
                x=y;
            }
            if(y<x){
                console.log("subiendo");
                window.scroll({
                top: -700,
                behavior: 'auto'
                });
                x=y;
            }

        };
        console.log(ultima);
    </script>

</body>

</html>