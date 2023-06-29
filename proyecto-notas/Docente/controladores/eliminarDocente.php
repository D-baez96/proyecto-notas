<?php
include_once('../../conexion.php');
include_once('../modelos/docente.php');

$doc = new Docente();
//verificar si se envió el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ID=$_POST['ID'];
    $result = $doc->deleteDocente($ID);

    if($result)
    {
        print "<script>alert(\"Docente eliminado\"); 
        window.location =:'../pages/index.php';</script>";
    }else{
        print "<script>alert(\"No se ha podido eliminar el docente\"); 
        window.location =:'../pages/eliminar.php';</script>";
    }
}
?>