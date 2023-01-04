<?php

function obtenerServicios() : array{
    try {
        //Importar la Conexión
        require 'database.php';
        //Escribir el código SQL
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db,$sql);
        //Arreglo vacio
        $servicios = [];
        $i = 0;
        //Obtener los resultados
        while($row = mysqli_fetch_assoc($consulta)){
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }
        return $servicios;
        // echo"<pre>";
        // var_dump($servicios);
        // echo"</pre>";
    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}
//Llamar a la funcion:
obtenerServicios();