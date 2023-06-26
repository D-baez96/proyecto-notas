<?php
include_once("../../conexion.php");
include_once ('../modelos/administrador.php');

//crear el objeto de la clase administrador 
$admin = new Administrador ();

//definir argumentos 
//insertar usuario
$Nombreusu = $_POST["nombre"];
$Apellidousu = $_POST["apellido"];
$Usuariosus = $_POST["usuarios"];
$Passwordusu = md5($_POST["contrasena"]);
$Perfil = $_POST["txtPerfil"];
$Estadousu = $_POST["txtestado"];

$admin -> addadmi($Nombreusu,$Apellidousu,$Usuariosus,$Passwordusu,$Perfil,$Estadousu);

?>