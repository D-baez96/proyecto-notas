<?php
include_once('../../conexion.php');
include_once('../modelos/administrador.php');


//crear el objeto de la clase administrador
$admin1 = new Administrador();
 //definir los argumentos que se van a enviar por medio de la función insertar usuario
$NombreUsu = $_POST['nombre'];
$ApellidoUsu = $_POST['apellido'];
$UsuarioUsu = $_POST['usuario'];
$PasswordUsu = MD5($_POST['contrasena']);
$Perfil = $_POST['txtperfil'];
$Estado = $_POST['txtestado'];

$admin1 -> addAdmi($NombreUsu,$ApellidoUsu, $UsuarioUsu, $PasswordUsu, $Perfil, $Estado);

?>