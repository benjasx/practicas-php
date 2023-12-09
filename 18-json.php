<?php include 'includes/header.php';




$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 2000,
        'disponible' => true
    ],
    [
        'nombre' => 'SmatTv',
        'precio' => 8000,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 4000,
        'disponible' => false
    ]
];



echo "<pre>";
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($json);



$json_array = json_decode($json);
var_dump($json_array);
echo "</pre>";


include 'includes/footer.php';