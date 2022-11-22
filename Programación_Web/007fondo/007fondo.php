<!-- 007fondo.php: Mediante el uso de cookies, crea una página con un desplegable con 
varios colores, de manera que el usuario pueda cambiar el color de fondo de la página. 
Al cerrar la página, ésta debe recordar, al menos durante 24h, el color elegido y la 
próxima vez que se cargue la página, lo haga con el último color seleccionado. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>007fondo</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script defer src="../js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="container-fluid ">
        <div class="row justify-content-center mt-5">
            <div class="col-2">
                <select class="form-select" name="color[]" aria-label="Default select example">
            <option selected>Elija un color</option>
                <option value="rojo" class="bg-danger">Rojo</option>
                <option value="verde" class="bg-success">Verde</option>
                <option value="azul" class="bg-primary">Azul</option>
            </select>
            </div>
             
        </div>
    </div>
    
</body>

</html>