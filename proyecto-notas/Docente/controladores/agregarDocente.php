<?php
include_once('../../conexion.php');
include_once('../modelos/docente.php');


//crear el objeto de la clase administrador
$docente = new Docente();
 //definir los argumentos que se van a enviar por medio de la función insertar usuario
$NombreDoc = $_POST['nombre'];
$ApellidoDoc = $_POST['apellido'];
$DocumentoDoc = $_POST['documento'];
$CorreoDoc = $_POST['correo'];
$MateriaDoc = $_POST['materia'];
$PasswordDoc = MD5($_POST['contrasena']);

$docente -> addDocente($NombreDoc, $ApellidoDoc, $DocumentoDoc, $CorreoDoc, $MateriaDoc, $PasswordDoc);

?>