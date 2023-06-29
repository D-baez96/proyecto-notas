<?php
require_once('../../conexion.php');
require_once('../modelos/materia.php');

if($_POST)
{
    $mate = new Materia();

    $ID = $_POST['ID'];
    $NombreMa = $_POST['nombre'];

    $mate -> updateMa($ID, $NombreMa);

    if($mate)
    {
        print "<script> altert (\"Materia actualizada\");
        window.location= '../pages/index.php';</script>";
    }else{
        print "<script> altert (\"Materia no actualizada\");
        window.location= '../pages/editar.php';</script>";
    }
}
?>