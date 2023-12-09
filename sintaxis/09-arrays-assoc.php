<?php include 'includes/header.php';


$cliente = [
    'nombre' => 'Benja',
    'saldo' => 1000,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";


echo $cliente['nombre'];
echo "<br/>";
echo $cliente['saldo'];
echo "<br/>";
echo $cliente['informacion']['disponible'];

//agragar elemento
$cliente['codigo'] = 01010102;
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';