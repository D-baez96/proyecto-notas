<?php
include_once('../../conexion.php');
include_once('../../Usuarios/modelos/Usuario.php');


if($_SERVER['REQUEST_METHOD']==='POST')
{
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Contrasena'];

    $usu = new Usuario();
    $usu -> login($Usuario,$Password);

    //redirigir al controlador de acuerdo al rol 
    if($usu->isloggedIn())
    {
        if($usu->isAdmin())
        {
            header('Location: ../../Administrador/pages/index.php');
        }elseif($usu->isDocente())
        {
            header('Location: ../../Materias/pages/index.php');
        }
        exit();
    }else {
        print "<script>alert('Nombre de usuario o contraseña incorrectos'); window.location='../../index.php';</script>";
    }
}
?>