<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesEdiAdmin.css">
    <title>Admin Navbar</title>
</head>

<body>
<nav class="container">
        <div class ="text">
            <h1>Materias 🤯</h1>
        </div>
        <ul class="navbar">
            <li><a href="../../Administrador/pages/agregarAdmin.php">Administrador</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="../../Docente/pages/agregarDoc.php">Docentes</a></li>
            <li><a href="../../Estudiante/pages/agregarEstu.php">Estudiantes</a></li>
            <button class = "btn">Cerrar Sesion</button>
        </ul>
    </nav>

    <?php
    include_once('../../Conexion.php');
    include_once('../modelos/materia.php');
    $ID = $_GET['ID'];

    $mate = new Materia ();
    $row= $mate->getidMa($ID);
    if($row){
?>

    <div class="div-container">
        <form action="../controladores/actualizarMateria.php" class="form-container" method="POST">
            <input type="hidden" name="ID" value="<?php echo $row['id_materia'] ?>">
            <label for="nombre" >Nombre</label>
            <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $row['NombreMa'] ?>">
            <br>
            <button class="btn-form" type="submit">Editar</button>
        </form>
        <?php }?>
    </div>
</body>
</html>