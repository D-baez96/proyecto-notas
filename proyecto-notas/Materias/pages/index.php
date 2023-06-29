<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesAdmin.css">
    <title>Document</title>
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

    <br>
    <h1>Lista de materias</h1>
    <div class="container2">
        <table>
            <tr>
                <th class="header">Id Materia</th>
                <th class="header">Nombre</th>
                <th class="header">Actualizar</th>
                <th class="header" >Eliminar</th>

            </tr>

            <tbody>
                <?php
                require_once('../../conexion.php');
                require_once('../modelos/materia.php');

                $obj =  new Materia();
                $datos = $obj-> getMa();

                foreach ($datos as $key)
                {

                
                ?>
                <tr>
                    <td><?php echo $key ['id_materia']?></td>
                    <td><?php echo $key ['NombreMa']?></td>
                    <td ><a href="editar.php?ID=<?php echo $key ['id_materia']?>" class="enlace">Actualizar</a></td>
                    <td ><a href="eliminar.php?ID=<?php echo $key ['id_materia']?>" class="enlace">Eliminar</a></td>
                </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>