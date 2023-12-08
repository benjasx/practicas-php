<?php include 'includes/header.php';

$numero1=20;
$numero2=40;
$numero3=30;
$numero4=40;
$numero5="40";


var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero2 === $numero5);
echo "<br/>";


//si izq es < = -1  ---- si derecha > = 1 ----- 0 si son iguales
var_dump($numero1 <=> $numero2);
echo "<br/>";

include 'includes/footer.php';