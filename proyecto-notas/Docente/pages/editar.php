<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesEdiAdmin.css">
    <title>Editar</title>
</head>

<body>
<nav class="container">
        <div class ="text">
            <h1>Docente 🧑🏻‍🏫</h1>
        </div>
        <ul class="navbar">
            
            <li><a href="#">Materias</a></li>
            <li><a href="#">Agregar Notas</a></li>
            <button class = "btn">Cerrar Sesion</button>
        </ul>
    </nav>

    <?php
    include_once('../../conexion.php');
    include_once('../modelos/docente.php');
    $ID = $_GET['ID'];

    $doc = new Docente ();
    $row= $doc->getidDo($ID);
    if($row){
?>

<div class="div-container">
        <form action="../controladores/actualizarDocente.php" class="form-container" method="POST">
            <input type="hidden" name="ID" value="<?php echo $row['id_docente'] ?>">
            <label for="nombre" >Nombre</label>
            <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $row['NombreDoc'] ?>">
            <br>
            <label for="apellido">Apellido</label>
            <input type="text" placeholder="Apellido" name="apellido" value="<?php echo $row['ApellidoDoc'] ?>">
            <br>
            <br>
            <label for="documento">Documento</label>
            <input type="text" placeholder="Documento" name="documento" value="<?php echo $row['DocumentoDoc'] ?>">
            <br>
            <br>
            <label for="correo">Correo</label>
            <input type="email" placeholder="Correo" name="correo"value="<?php echo $row['CorreoDoc'] ?>">
            <br>
            <br>
            <label for="materia">Materia</label>
            <input type="text" placeholder="Materia" name="materia" value="<?php echo $row['Materia'] ?>">
            <br>
            <br>
            <label for="contraseña">Contraseña</label>
            <input type="text" placeholder="Contraseña" name="contrasena"value="<?php echo $row['PasswordDoc'] ?>">
            <br>
            <button class="btn-form" type="submit">Editar</button>
        </form>
        <?php }?>
    </div>
</body>
</html>