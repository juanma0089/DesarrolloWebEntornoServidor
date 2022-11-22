<!-- 002formulario.html/.php: Crea un formulario que solicite:
Nombre y apellidos. Email. URL página personal. Sexo (radio). Número de convivientes 
en el domicilio. Aficiones (checkboxes) – poner mínimo 4 valores.
Menú favorito (lista selección múltiple) – poner mínimo 4 valores.
Muestra los valores cargados en una tabla-resumen.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>003Validación</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script defer src="../js/bootstrap.bundle.js"></script>
</head>

<body>

    <?php
            
    // Comprobar si se ha enviado el formulario:    
        if(!empty($_GET)){

            $nombre = $_GET["nombre"]??"";
            $apellidos = $_GET["apellidos"]??"";
            $email = $_GET["email"]??"";
            $url = $_GET["url"]??"";
            $sexo = $_GET["sexo"]??[];
            $convivientes = $_GET["convivientes"] ?? 1;
            $aficiones = $_GET["aficiones"] ??[];
            $menu = $_GET["menu"] ?? [];
            $validado = true;
            $listaMenu = ["Pizza", "Alitas", "Tallarines", "Patatas"];

            // Comprobar si llegaron los campos requeridos:
                //nombre
                if (empty($nombre)){
                        echo "Este campo no puede estar vacío <br>";
                        $validado = false;
                }else{
                    // expresión regular para letras y espacios
                    if (preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/", $nombre)) {
                            $nombre = $_GET["nombre"];
                    }else{
                                echo "Sólo se permiten letras para el nombre <br>";
                                $validado = false;
                    }
                }

                //apellidos
                if (empty($apellidos)){
                    echo "Este campo no puede estar vacío <br>";
                    $validado = false;
                }else{
                // expresión regular para letras y espacios
                    if (preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/", $apellidos)) {
                            $apellidos = $_GET["apellidos"];
                    }else{
                            echo "Sólo se permiten letras para los apellidos <br>";
                            $validado = false;
                    }
                }
           
                //email
                if(empty ($_GET["email"])){
                    echo "Introduzca un email <br>";
                    $validado = false;

                    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL) ) {

                        $email =$_GET["email"];

                    } else {

                        echo "Dirección email no valida <br>";
                        $validado = false;
                    }
                }
                // validar url
                if(empty ($_GET["url"])){

                    echo "Introduzca una URL<br>";
                    $validado = false;
                }else{
                        
                    if (filter_var($_GET["url"], FILTER_VALIDATE_URL)){

                        $url = $_GET["url"];

                    } else {
                        echo "URL no valida <br>";
                        $validado = false;
                    }
                }

                //validar sexo
                if(in_array('value1', $_GET["sexo"])){
                    $sexo = $_GET["sexo"];
                }

                //validar convivientes
                    
                if (empty($_GET["convivientes"])){

                    echo "Debe señalar almenos 1 conviviente";
                    $validado = false;
                } else{
                
                    if(filter_var($_GET["convivientes"], FILTER_VALIDATE_INT)){

                        $convivientes = $_GET["convivientes"];
                    }
                    
                }

                //aficiones

                if (count($aficiones) > 0) {
                    foreach ($aficiones as $valor) {
                        if (!in_array($valor, $aficiones)) {
                            $validado = false;
                            unset($aficiones[$valor]);
                        }
                    }
                } else {
                    echo "Señale almenos una afición";
                    $validado = false;
                }

                if (count($menu) > 0) {
                    foreach ($menu as $valor) {
                        if (!in_array($valor, $listaMenu)) {
                            $validado = false;
                            unset($menu[$valor]);
                        }
                    }
                } else {
                    $validado = false;
                }
        }
                if (!empty($_GET) && $validado) {
                    echo "Formulario enviado";
                } else{
                
                ?>
   
    
    <div class="container fluid">
        <form class="row g-3 needs-validation" action="003validacion.php" method="GET">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" name="nombre" value="<?php if (isset($nombre)) echo $nombre ?>" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validationCustom02" name="apellidos" value="<?php if (isset($apellidos)) echo $apellidos ?>" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" value="<?php if (isset($email)) echo $email ?>" placeholder="abc@mail.com">
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom03" class="form-label">URL página personal</label>
                <input type="url" class="form-control" id="validationCustom03" name="url" value="<?php if (isset($url)) echo $url ?>">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-2">
                <div class="col-md-2">
                    <div>Sexo</div>
                    <div class="form-check">
                        <!-- comprobar como ejemplo clase -->
                        <input class="form-check-input" type="radio" name="sexo[]" id="hombre" value="hombre" <?php if (isset($sexo) && ($sexo[0] === "hombre")) echo "checked"; ?>>
                        <label class="form-check-label" for="hombre">
                            Hombre
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo[]" value="mujer" id="mujer" <?php if (isset($sexo) && ($sexo[0] === "mujer")) echo "checked"; ?>>
                        <label class="form-check-label" for="mujer">
                            Mujer
                        </label>
                    </div>
                </div>
            </div>
            <!-- seguir por aquí en casa -->
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Nº de convivientes</label>
                <input type="number" class="form-control" id="validationCustom05" required min="1" name="convivientes" value="<?php if (isset($convivientes)) echo $convivientes ?>">
                <div class="invalid-feedback">
                    Introduzca número de convivientes.
                </div>
            </div>
            <div class="col-md-4">
                <div><label for="">Aficiones</label></div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]"  id="flexCheckDefault" value = "Fútbol" <?php if (isset($aficiones) && (count($aficiones) > 0 && in_array("Fútbol", $aficiones))) echo "checked" ?>>
                    <label class="form-check-label" for="flexCheckDefault">
                        Fútbol
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]"  id="flexCheckChecked" value = "Juegos pc" <?php if (isset($aficiones) && (count($aficiones) > 0 && in_array("Juegos pc", $aficiones))) echo "checked" ?>>
                    <label class="form-check-label" for="flexCheckChecked">
                        Juegos pc
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]"  id="flexCheckChecked" value = "Películas" <?php if (isset($aficiones) && (count($aficiones) > 0 && in_array("Películas", $aficiones))) echo "checked" ?>>
                    <label class="form-check-label" for="flexCheckChecked">
                        Películas
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]"  id="flexCheckChecked" value="Series" <?php if (isset($aficiones) && (count($aficiones) > 0 && in_array("Series", $aficiones))) echo "checked"?>>
                    <label class="form-check-label" for="flexCheckChecked">
                        Series
                    </label>
                </div>
            </div>
            <label for="validationCustom05" class="form-label">Menú favoritos</label>
            <select name="menu[]" multiple="true" class="col-md-3">
                <option value="Pizza" name="menu1" <?php if (isset($menu) && (count($menu) > 0 && in_array("Pizza", $menu))) echo "selected" ?>>BBQ pizza telepi</option>
                <option value="Alitas" name="menu2" <?php if (isset($menu) && (count($menu) > 0 && in_array("Alitas", $menu))) echo "selected" ?>>Alitas</option>
                <option value="Tallarines" name="menu3" <?php if (isset($menu) && (count($menu) > 0 && in_array("Tallarines", $menu))) echo "selected" ?>>Tallarines</option>
                <option value="Patatas" name="menu4" <?php if (isset($menu) && (count($menu) > 0 && in_array("Patatas", $menu))) echo "selected" ?>>Patatas</option>
            </select>
            <div class="col-12">
                <br>
                <input class="btn btn-primary" name="enviar" type="submit"></input>
            </div>

        </form>

    </div>
    <?php } ?>
</body>

</html>