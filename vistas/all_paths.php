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
    <br>
    <br>
    <br>
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
        <div class="progreso_de_cada_parte">
            <p>Tu progreso: 0%</p>
            <div id="Progreso_fundamentos" class="Barra" style="width: 0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <br>
    </div>
   
    <script src="../js/progreso.js"> </script>

</body>

</html>