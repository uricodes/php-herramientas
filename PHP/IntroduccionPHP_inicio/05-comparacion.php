<?php include 'includes/header.php';


//Variables
$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

//Comparación
var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";    

//Operador Igualdad
var_dump($numero2 == $numero2);
echo "<br>";

//Operador Igualdad
var_dump($numero2 == $numero4);
echo "<br>";
    //Igualdad Estricta (Revisa Valor y tipo de dato)
    var_dump($numero2 === $numero4);
    echo "<br>";

//  Operador <=>
/*
<=> -1 Si izquierda es menor
<=> 0 si es igual
<=> 1 Si izquierda es mayor
*/
var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero2 <=> $numero3);
echo "<br>";

var_dump($numero3 <=> $numero1);
echo "<br>";

include 'includes/footer.php';