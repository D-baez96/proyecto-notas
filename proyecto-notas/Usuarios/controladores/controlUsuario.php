<?php
include_once('../../conexion.php');
include_once('../modelos/Usuario.php');

if($_POST)
{
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Contrasena'];

    $modelo = new Usuario();

    if($modelo->login($Usuario,$Password))
    {
        header('Location:../../Administrador/pages/index.php');
    }else{
        header('Location:../../index.php');
    }

}else{
    echo "<script>alert('Campos incorrectos');
        window.location='../../index.php';</script>";
}
?>