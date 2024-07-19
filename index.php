<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>HOLA MUNDO!!</h1>
<h2>
<?php
    // comentarios de línea
    /** para crear un bloque
     *
    */

    #comentarios de línea

$a=3;
$b=5;

$c=$a+$b;
echo "el resultado de la suma es " . $c; //se concatena con. o con ,

$nombre="Daniel";
$nombre.=" Díaz";
echo "<br>". $nombre;
echo "<br>".gettype($a);
echo "<br>".gettype($nombre);
echo "<br>".is_string($a); //cuando es true es 1

define("IVA", 21);
echo "<br>El IVA ES " .IVA."%";
echo "<br>".M_PI;
echo "<br>".__LINE__;

/*
 * Variables generadas dinamicamente
 **/

$m_en="Hello";
$m_es="Hola";
$m_it="Ciao";

//variable para definir el idioma se va a usar en este caso
$idioma="es";
//variable con el nombre generado dinamicamente
$bienvenida="m_".$idioma;

//lo que mostrará de la variable
echo "<br>";
echo "!". $$bienvenida. "!";

/********************/

$r=10;

$l= 2*M_PI*$r;

echo "<h3> La longitud es ";
printf("%0.2f", $l);
echo "</h3>";

/**/

$s= M_PI*$r**2;
echo "<h3> La longitud es ";
printf("%0.2f", $s);
echo "</h3>";

/**/

$v=4/3*M_PI*$r**3;
echo "<h3> La longitud es ";
printf("%0.2f", $v);
echo "</h3>";









?>
</h2>
<p>
    <span></span>
</p>
</body>
</html>