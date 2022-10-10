<?php
class usuariosModel {
    /*
    MEtodo para obtener todos los usarios
    */
    function getUsuarios(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "SELECT
        id,
        nombres,
        apellidos ,
        `user`,
        password ,
        fecha_created,
        fecha_updated
    FROM
        `user`;";
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar();
        return $resultado;
}


//Metodos para eliminar usuarios
function eliminarUsuario($id){
    $conexionClass = new Tools();
    $conexion = $conexionClass->conectar();
    $sql = "DELETE from users where id= $id";

    $resultado= mysqli_query($conexion, $sql);
    if ($resultado) {
        
        # code...
    }
}

}