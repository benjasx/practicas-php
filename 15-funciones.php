<?php
declare(strict_types =1);
 include 'includes/header.php';


function sumar(int $n1 = 0, int $n2= 0){
    echo $n1+$n2;
};

echo sumar(5,10). "<br/>"; 
echo sumar(52,10). "<br/>"; 
echo sumar(520). "<br/>"; 
echo sumar(). "<br/>"; 

//parametros nombrados
echo sumar(n2: 2,n1:3). "<br/>"; 




include 'includes/footer.php';