<?php
include_once('../../conexion.php');
include_once('../modelos/materia.php');


//crear el objeto de la clase administrador
$admin1 = new Materia();
 //definir los argumentos que se van a enviar por medio de la función insertar usuario
$NombreMa = $_POST['nombreMa'];

$admin1 -> addMateria($NombreMa);   

?>