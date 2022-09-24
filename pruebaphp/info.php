<?php

function conexion(){
    #variables para conexion
    $host='localhost';
    $usuario= 'root';
    $password= 'Admin*123';
    $database= 'bdserver';

    $conexion= mysqli_connect($host, $usuario, $password, $database);
    if (conexion) {
        echo "CONEXION EXITOSA";
        mysqli_query($conexion, "SET NAMES 'utf8'");
    }else {
        echo "CONEXION FALLIDA".mysql_error();
        
    }
    return $conexion;
}
$resultado= conexion();

#cerrar conexion
mysqli_close($resultado);

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>
    
</h1>

</body>
</html>