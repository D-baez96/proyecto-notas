<?php
require_once('../../conexion.php');
require_once('../modelos/docente.php');

if($_POST)
{
    $doc = new Docente();

    $ID = $_POST['ID'];
    $NombreDoc = $_POST['nombre'];
    $ApellidoDoc = $_POST['apellido'];
    $DocumentoDoc = $_POST['documento'];
    $CorreoDoc = $_POST['correo'];
    $MateriaDoc = $_POST['materia'];
    $PasswordDoc = $_POST['contrasena'];

    $doc -> updateDocente($ID, $NombreDoc, $ApellidoDoc, $DocumentoDoc, $CorreoDoc, $MateriaDoc, $PasswordDoc);

    if($doc)
    {
        print "<script> altert (\"Docente actualizado\");
        window.location= '../pages/index.php';</script>";
    }else{
        print "<script> altert (\"Docente no actualizado\");
        window.location= '../pages/editar.php';</script>";
    }
}
?>