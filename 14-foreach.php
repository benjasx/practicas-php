<?php include 'includes/header.php';


$clientes = array('benja', 'paco', 'alberto');

foreach($clientes as $cliente){
    echo $cliente . "<br/>";
};

echo count($clientes);
echo "<br/>";

//OTRA FORMA CON (): END)
foreach($clientes as $cliente):
    echo $cliente . "<br/>";
endforeach;



$cliente = [
    'nombre' => 'Benja',
    'saldo' => 500,
    'tipo' => 'premium'
];

foreach($cliente as $key => $valor){
    echo $key. ": " .$valor . "<br/>";
}


//----------------------------------------------------------
//----------------EJEMPLO REAL-----------------------------

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

foreach($productos as $key => $producto){ ?>
    <li>
        <p>Producto <?php echo $producto['nombre'] ?></p>
        <p>$<?php echo $producto['precio'] ?></p>
        <!-- TERNARIO -->
        <p><?php echo ($producto['disponible']) ? "Disponible" : "No disponible"?> </p>


        <?php
            /* if($producto['disponible']){
                echo "<p>Disponible</p>";
            }
            else{
                echo "<p>NO Disponible</p>";
            } */
        ?>
        
    </li>

    <?php


};


include 'includes/footer.php';