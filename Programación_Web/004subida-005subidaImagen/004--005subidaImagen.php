<!-- 004subida.html/.php: Crea un formulario que permita subir un archivo al servidor. 
Además del fichero, debe pedir en el mismo formulario dos campos numéricos que 
soliciten la anchura y la altura. Comprueba que tanto el fichero como los datos llegan 
correctamente. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>004-005Img</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script defer src="../js/bootstrap.bundle.js"></script>
</head>

<body>
    <?php
    if (isset($_FILES['image']) && isset($_POST['width']) && isset($_POST['height'])) {
        $errors = array();
        
        $ancho = $_POST['width'];
        $alto = $_POST['height'];
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = array("jpeg", "jpg", "png");
        
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Extensión no permitida. Prueba con imágenes jpeg,jpng o png.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'El archivo no puede pesar más de 2MB';
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "./images/" . $file_name);
            echo "La imagen se ha guardado correctamente";
        } else {
            print_r($errors);
        }

    }  
    ?>
    <div class="container mt-5">
        <div class="">
            <form  action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId">
        </div>
        <div class="row mt-4">
            <div class="col">  
                <label for="ancho" class="form-label">Introduzca el ancho</label>
                <input type="number" name="width" value="width" class="form-control"> 
            </div>
            <div class="col">  
                <label for="alto" class="form-label">Introduzca el alto</label>
                <input type="number" name="height" value="height" class="form-control"> 
            </div>
        </div>
        

        <input type="submit" class="col-2 mt-3 btn btn-primary"/>
        </form>
    </div>
    
</body>

</html>