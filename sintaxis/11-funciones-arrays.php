<?php include 'includes/header.php';


//para buscar elementos en un array
$carrito = array('tablet','computadora','mouse','teclado');
var_dump(in_array('Tablet',$carrito));


//ORDENAR ELEMENTOS DE UN ARREGLO


$num = array(100,5,7,6,4,9,12);
sort($num); //de menor a mayor
echo "<pre>";
var_dump($num);
echo "<pre>";


rsort($num); //de mayor a menor
echo "<pre>";
var_dump($num);
echo "<pre>";


//ORDENAR ARRAY ASOCIATIVO - ORDENA POR VALOR
$cliente = array(
    'saldo'=>200,
    'tipo'=>'premiun',
    'nombre' => 'benja'
);


asort(($cliente));
echo "<pre>";
var_dump($cliente);
echo "<pre>";
$cliente = array(
    'saldo'=>200,
    'tipo'=>'premiun',
    'nombre' => 'benja'
);


//ORDENAR ARRAY ASOCIATIVO - ORDENA POR LLAVES
ksort(($cliente));
echo "<pre>";
var_dump($cliente);
echo "<pre>";




include 'includes/footer.php';