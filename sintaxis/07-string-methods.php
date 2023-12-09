<?php include 'includes/header.php';
 
$nombreCliente = "Benja sanchez";
echo strlen($nombreCliente);


//eliminar espacios en blanco
echo "<br/>";
//trim borra espacios en blanco
$nombreCliente = trim($nombreCliente);
echo strlen($nombreCliente);
echo "<br/>";


echo strtoupper($nombreCliente);
echo "<br/>";
echo strtolower($nombreCliente);


$correo_1 = "Benja@gmail.com";
$correo_2 = "benja@gmail.com";
echo "<br/>";

var_dump(strtolower($correo_1) === strtolower($correo_2));
echo "<br/>";


echo str_replace('Juan', 'J', $nombreCliente);
echo "<br/>";

//revisar si un string existe o no
echo strpos($nombreCliente, 'Pablo');

echo "<br/>";
$tipoCliente = "premium";

echo "El cliente $nombreCliente es $tipoCliente";
echo "<br/>";


include 'includes/footer.php';