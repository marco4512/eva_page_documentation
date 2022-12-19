<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only Bootstrap -->

    <link rel="stylesheet" type="text/css" href="../style/style.css" media="screen" />
    <script src="../js/redireccionador.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
</head>
<body class="Barra_nav">
    <div class="contenedor_menu">
        <div class="Imagen_banner">
            <img src="../img/logo-apisec.png" alt="logo-apisec">
        </div>
        <div class="menu">
            <ul>
                <li class="opciones_menu"><a class="texto_opciones_menu" href="../index.php?vista=<?php echo urlencode('valor');?>" >Todas las partes |</a></li>
                <li class="opciones_menu"><a class="texto_opciones_menu" href="">Docs |</a></li>
                <li class="opciones_menu"><a class="texto_opciones_menu" href="">Sobre el autor |</a></li>
                <li class="opciones_menu"><input class="Buscador" type="text" placeholder="Buscar" name="search" ></li>
            </ul>
        </div>
    </div>
</body>

</html>