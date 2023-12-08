<?php include 'includes/header.php';

//  WHILE
$i = 100;
$e = 1;
while ($i < 10) {
    echo $i . "<br/>";
    $i++;
}


//DO WHILE
do {
    echo $i . "<br/>";
    $i++;
} while ($i < 10);


//FORLoop
/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 FIZZ BUZZ
 */


for ($e=1; $e <= 100 ; $e++) { 
    if ($e % 3 === 0 && $e % 5 === 0) {
        echo $e . " -FIZZ BUZZ <br/>";
    }elseif ($e % 5 === 0 ) {
        echo $e . " - BUZZ <br/>";
    }elseif($e % 3 === 0){
        echo $e . " -FIZZ <br/>";
    }
}

include 'includes/footer.php';