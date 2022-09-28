<?php



class Tools{
   function conectar() {
    $conexion = mysqli_connect(SERVER, USERDB, PASSDB, DATABASE);
   if($conexion){
    mysqli_query($conexion, "SET NAMES 'utf8'")
    mysqli_set_charset($conexion, "utf8");

   }else{
    echo "ERROR DE CONEXION DEBIDO A: <br> ".mysqli_connect_error();
   }

   return $conexion;
}
function desconectar($conexion){
    $close= mysqli_close($conexion);

    if (!$close) {
        echo "OCURRIO UN ERROR AL CERRAR LA CONEXION DEBIDO A: <br>".mysqli_connect_error();
    }
    return $close;
}

}


?>