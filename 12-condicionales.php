<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin){
    echo "Usuario autenticado";
}else{
    echo "Usuario NO autenticado";
}

echo "<br/>";
// If anidados

$cliente = [
    'nombre' => 'Benja',
    'saldo' => 1200,
    'informacion' => [
        'tipo' => 'premium',

    ]
];

if(!empty($cliente)){
    echo "El arreglo tiene elementos";
    echo "<br/>";
    if ($cliente['saldo'] > 0) {
        echo "El clienete tiene ";
    }else{
        echo "El clienete no tiene saldo disponible";
    }
}else{
    echo "El arreglo de cliente esta vacio";
    
}

echo "<br/>";
echo "-----------------------------";


if ($cliente['saldo'] > 0) {
    echo "<br/>";
    echo "El cliente tiene saldo";
}elseif ($cliente['informacion']['tipo'] === 'premium') {
    echo "<br/>";
    echo "El cliente es premium";
}else{
    echo "<br/>";
    echo "No hay datos";
}


//Switch

$tecnologia = 'JS';

switch ($tecnologia) {
    case 'PHP':
        echo "<br/>";
        echo "PHP un Buen lenguaje pero no mas que JS 😂";
        break;
        
        default:
        echo "<br/>";
        echo "Ni pedo, TEAM JS 😂";
        break;
    }

include 'includes/footer.php';