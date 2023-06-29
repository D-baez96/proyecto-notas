<?php
include_once('../../conexion.php');
include_once('../modelos/estudiante.php');


//crear el objeto de la clase administrador
$estudiante = new Estudiante();
 //definir los argumentos que se van a enviar por medio de la función insertar usuario
$NombreEst = $_POST['nombre'];
$ApellidoEst = $_POST['apellido'];
$DocumentoEst = $_POST['documento'];
$CorreoEst = $_POST['correo'];
$MateriaEst = $_POST['materia'];
$DocenteEst = $_POST['docente'];
$Fecha_registro = $_POST['fecha'];

$estudiante -> addEstudiante($NombreEst, $ApellidoEst, $DocumentoEst, $CorreoEst, $MateriaEst, $DocenteEst, $Fecha_registro);

?>