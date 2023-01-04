<?php 
declare(strict_types=1);
include 'includes/header.php';


function sumar(int $numero1 = 0, int $numero2 = 0){//Parametros
    echo $numero1 + $numero2;
}
sumar(5,5);//Argumentos

include 'includes/footer.php';