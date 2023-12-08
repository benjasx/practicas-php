<?php include 'includes/header.php';

$clientes = [];

$clientes_1 = array();

$clientes_2 = array('Pedro', 'juan', 'Karen');

$cliente = [
    'nombre' => 'Benja',
    'saldo' => 1000,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];


//para saber si esta vacio
var_dump(empty($clientes_2));
echo "<br>";
var_dump(empty($clientes));
echo "<br>";
var_dump(empty($clientes_3));
echo "<br>";

//ISSET => REVISA SI UN ARREGLO ESTA CRADO O ESTA DEFINIDO
var_dump(isset($clientes_4));
echo "<br>";
var_dump(isset($clientes_2));
echo "<br>";
var_dump(isset($cliente['nombre']));
include 'includes/footer.php';

