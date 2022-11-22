<!-- 006contadorVisitas.php: Mediante el uso de cookies, informa al usuario de si es su 
primera visita, o si no lo es, muestre su valor (valor de un contador). Además, debes 
permitir que el usuario reinicialice su contador de visitas. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>006ContadorVisitas</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script defer src="../js/bootstrap.bundle.js"></script>
</head>

    <body>
    
    <div class="container-fluid ">
        <p><?php $mensaje;?></p>
        <button type="submit" name="submit" ><a href="006reset.php">Reset</a></button>
    </div>
    </body>
</html>

<?php


if(isset($_COOKIE['contadorCookie'])){
    setcookie("contadorCookie", $_COOKIE['contadorCookie']+1,time()+3600*24);
   echo $mensaje = 'Numero de visitas: '.$_COOKIE['contadorCookie'];
}else{

    setcookie('contadorCookie',1,time()+3600*24);
       echo $mensaje = 'Es la primera vez que visitas la web';
}
?>