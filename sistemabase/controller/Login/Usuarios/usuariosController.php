<?php
session_start();
if(!$_SESSION['user-id']){
    header("location: ../../index.php");
}
include_once("../../model/functions.php");
$usrModel= new usuariosModel();

//para saber si está llegando

$eliminar_usuario = (isset($_POST['Eliminar usuario']))? $_POST['Eliminar usuario'];

if($eliminar_usuario==1){
    $id=(isset($_POST['id'])) ? $_POST['id'] : "0";
    $result= $usrModel->eliminarUsuario(i$id);

    $respuesta = array();
    $respuesta['resultado']= $result;
    echo json_encode($respuesta);
}

?>