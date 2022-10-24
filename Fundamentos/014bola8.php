
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <?php
/*14. 014bola8.html: Prepara un formulario con una caja de texto que realice a 
una pregunta al usuario. 014bola8.php: A partir del anterior, crea un 
programa que muestre la pregunta recibida y genere una respuesta de 
manera aleatoria entre un conjunto de respuestas predefinidas, 
almacenadas en un array: Sí, no, quizás, claro que sí, por supuesto que no, 
no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
Este ejercicio se basa en el juego de la Bola 8 mágica.*/
$pregunta = $_POST['pregunta'];

$arrayRespuestas = ['Sí','No',
                    'Quizás','Claro que sí',
                    'Por supuesto que no',
                    'No lo tengo claro',
                    'Seguro','Yo diría que sí',
                    'Ni de coña','Claro que si guapi'];

echo "<h1>".$pregunta."</h1><br>"; 
echo"<p>".$arrayRespuestas[array_rand($arrayRespuestas)]."</p>";   
?>   
    </head>
    <body>
        <p><a href="014bola8.html">Volver a preguntar</a></p>
    </body>
</html>

