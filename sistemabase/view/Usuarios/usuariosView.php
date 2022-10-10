<?php
session_start();
if(!$_SESSION['user_id']){
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$result= $usrClass->getUsuarios();

?>

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-botom">
            <h1>Listado de usuarios</h1>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead >
                        <tr>
                            <th scope="col">ID </th>
                            <th scope="col">NOMBRE </th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">CONTRASEÑA</th>
                            <th scope="col">FECHA DE CREACIÓN </th>
                            <th scope="col">ACTUALIZAR</th>
                            <th scope="col">ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  while($fila = mysqli_fetch_array($result)){ ?>
                        <tr>
                          
                           <th><?php echo $fila['id']; ?> </th> 
                           <th nowrap><?php echo $fila['nombres']."".$fila['apellidos']; ?> </th> 
                           <th><?php echo $fila['user']; ?> </th> 
                           <th><?php echo $fila['password']; ?> </th> 
                           <th nowrap><?php echo $fila['fecha_created']; ?> </th> 
                           <th nowrap><?php echo $fila['fecha_updated']; ?> </th> 
                           <th><div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-danger me-md-2" id="btnEliminaUsuario" name="btnEliminaUsuario" type="button">Actualizar</button>
                           </div></th> 
                           <th>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-danger me-md-2" id="btnEliminaUsuario" name="btnEliminaUsuario" type="button"
                                onclick="">Eliminar</button>
                           </div>
                        </th> 
                           
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="sistemabase/assets/js/usuariosView.js"></script>

<h1>Hola desde el archivo usuariosView php></h1>

