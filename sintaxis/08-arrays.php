<?php include 'includes/header.php';

$car = ['Tablet', 'Mouse', 'Computadora'];
echo "<pre>";
var_dump($car);
echo "</pre>";
//Acceder a un elemento del Array
echo $car[1];


//Agregar elemento

$car[3] = "smartTv";

echo "<pre>";
var_dump($car);
echo "</pre>";



//añadir un elemento al final
array_push($car, 'Audifonos');
echo "<pre>";
echo "</pre>";


//Agregar al inicio
array_unshift($car, 'stmartWacht');
echo "<pre>";
var_dump($car);
echo "</pre>";

//crear un arreglo 
$clientes = array('Cliente 1','Cliente 2','Cliente 3');

echo $clientes[1];

include 'includes/footer.php';