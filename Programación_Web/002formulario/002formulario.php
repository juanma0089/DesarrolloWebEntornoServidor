<!-- 002formulario.html/.php: Crea un formulario que solicite:
Nombre y apellidos. Email. URL página personal. Sexo (radio). Número de convivientes 
en el domicilio. Aficiones (checkboxes) – poner mínimo 4 valores.
Menú favorito (lista selección múltiple) – poner mínimo 4 valores.
Muestra los valores cargados en una tabla-resumen. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>002formulario</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script defer src="../js/bootstrap.bundle.js"></script>
</head>

<body>
    <?php
    $name = $_POST["nombre"]??"";
    $apellidos = $_POST["apellidos"]??"";
    $email = $_POST["email"]??"";
    $url = $_POST["url"]??"";
    $sexo = $_POST["sexo"]??"";
    $convivientes = $_POST["convivientes"]??1;
    $aficiones = $_POST["aficion"]??[];
    $menu = $_POST["menu"]??[];

    ?>

<table class="table table-responsive table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Url</th>
            <th>Sexo</th>
            <th>Nº convivientes</th>
            <th>Aficiones</th>
            <th>Menú favorito</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $name?></td>
            <td><?= $apellidos?></td>
            <td><?= $email?></td>
            <td><?= $url?></td>
            <td><?= $sexo?></td>
            <td><?= $convivientes?></td>
            <td>
                <?php 
                foreach($aficiones as $clave => $aficion){
                    echo $aficion."<br>";
                }
                ?>
            </td>

            <td><?php 
                foreach($menu as $clave => $comida){
                    echo $comida."<br>";
                }
                ?>
                </td>
            
        </tr>
    </tbody>
</table>

</body>

</html>