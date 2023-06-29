<?php
include_once('../../conexion.php');
include_once('../modelos/materia.php');

$mate = new Materia();
//verificar si se envió el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ID=$_POST['ID'];
    $result = $mate->deleteMa($ID);

    if($result)
    {
        print "<script>alert(\"Materia eliminada\"); 
        window.location =:'../pages/index.php';</script>";
    }else{
        print "<script>alert(\"No se ha podido eliminar la materia\"); 
        window.location =:'../pages/eliminar.php';</script>";
    }
}
?>