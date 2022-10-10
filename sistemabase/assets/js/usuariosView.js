function eliminarUsuario(id){
    console.log('Eliminando', id);
    $.ajax({
        type: 'POST',
        data: 'eliminar_usuario=1&id='+id,
        url: 'controller/Login/loginController.php',
        dataType: 'json',
        succes: function (data){
            var resultado= data.resultado;
            if(resultado==1){
                alert('Usuario eliminado correctamente');
                cargarContenido('sistemabase/view/Usuarios/usuariosView.php');
            }else{
                alert('No se pudo eliminar el usuario');
            }
        }
    });
}
