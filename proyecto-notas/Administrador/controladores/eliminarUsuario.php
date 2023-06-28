<?php
include_once('../../conexion.php');
include_once('../modelos/administrador.php');

$admi = new Administrador();
//verificar si se envió el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ID=$_POST['ID'];
    $result = $admi->deletead($ID);

    if($result)
    {
        print "<script>alert(\"Usuario eliminado\"); 
        window.location =:'../pages/index.php';</script>";
    }else{
        print "<script>alert(\"No se ha podido eliminar el usuario\"); 
        window.location =:'../pages/eliminar.php';</script>";
    }
}
?>