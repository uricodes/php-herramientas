<?php include 'includes/header.php';

//While (Evalua y Ejecuta)
$i = 0; //Inicializador
while($i < 10){
    echo $i . "<br>";
    $i++; //Incremento
}
echo"<br>";
//Do While (Ejecuta y Evalua)
$i = 0;
do{
    echo $i . "<br>";
    $i++;
}while($i <= 10);
echo"<br>";

//For Loop
for($i = 0; $i <= 12; $i++){
    echo $i . "<br>";
}
echo"<br>";
/*
-Si el número es divisible entre 3 imprimir, Fizz.
-Si el número es divisible entre 5 imprimir, Buzz.
-Si el número es divisible entre 3 y 5, imprimir Fizz Buzz.
*/
echo("Prueba FizzBuzz:");
echo"<br>";
for($i=1; $i <= 100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo$i.(" = FIZZBUZZ")."<br>";
    }
    elseif($i % 3 === 0){
        echo$i.(" = Fizz")."<br>";
    }
    elseif($i % 5 === 0){
        echo$i.(" = Buzz")."<br>";
    }else{
        echo$i."<br>";
    }
}
echo("<br>");
//For Each
    //Arreglo Indexado
$clientes = array("Pedro","Juan","Karen");
foreach($clientes as $cliente){
    echo $cliente."<br>";
}
echo"<br>";
    //Arreglo Asociativo
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "tipo" => "Premium"
];
foreach($cliente as $key => $c){
    echo $key.(" = ").$c."<br>";
}
include 'includes/footer.php';