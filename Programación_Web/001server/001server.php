<!-- 001server.php: igual que el ejemplo visto en los apuntes, muestra los valores de 
$_SERVER al ejecutar un script en tu ordenador.
Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
Prepara un formulario (001post.html) que haga un envío por POST y compruébalo de 
nuevo.
Crea una página (001enlace.html) que tenga un enlace a 001server.php y comprueba 
el valor de HTTP_REFERER. -->
<?php 
echo $_SERVER["PHP_SELF"]."<br>"; 
echo $_SERVER["SERVER_SOFTWARE"]."<br>"; 
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>"; 
echo $_SERVER["REQUEST_URI"]."<br>";
echo $_SERVER["QUERY_STRING"]."<br>";

echo $_SERVER["HTTP_USER_AGENT"]."<br>";

//*Muestra
// /DesarrolloWebEntornoServidor/Programación_Web/001server/001server.php
// Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.10
// localhost
// GET
///DesarrolloWebEntornoServidor/Programacio%CC%81n_Web/001server/001server.php

// Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36



//* parámetros por GET

$saludo = $_GET["saludo"];
echo "<br>".$saludo;

//*Muestra
// DesarrolloWebEntornoServidor/Programación_Web/001server/001server.php
// Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.10
// localhost
// GET
///!DesarrolloWebEntornoServidor/Programacio%CC%81n_Web/001server/001server.php?saludo=hola
//!saludo=hola
//Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36

//!hola

//?Los cambios que se producen al introducir datos por url son: 
//?REQUEST_URI el cual cambia de valor al cambiar url 
//?QUERY_STRING muestra clave-valor introducidos en la url

echo $_SERVER["HTTP_REFERER"];
?>