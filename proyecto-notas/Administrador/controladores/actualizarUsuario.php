<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

if($_POST)
{
    $admin = new Administrador();

    $ID = $_POST['ID'];
    $NombreUsu = $_POST['nombre'];
    $ApellidoUsu = $_POST['apellido'];
    $PasswordUsu = $_POST['contrasena'];
    $Usuario = $_POST['Usuario'];
    $Perfil = $_POST['perfil'];
    $Estado = $_POST['estado'];

    $admin -> updatead($ID, $NombreUsu, $ApellidoUsu, $Usuario, $PasswordUsu,$Perfil,$Estado);

    if($admin)
    {
        print "<script> altert (\"Usuario actualizado\");
        window.location= '../pages/index.php';</script>";
    }else{
        print "<script> altert (\"Usuario no actualizado\");
        window.location= '../pages/editar.php';</script>";
    }
}
?>