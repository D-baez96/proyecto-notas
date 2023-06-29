<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesDoc.css">
    <title>Docente Navbar 🧑🏻‍🏫</title>
</head>
<body>
    <nav class="container">
        <div class ="text">
            <h1>Docente 🧑🏻‍🏫</h1>
        </div>
        <ul class="navbar">
            
            <li><a href="../../Materias/pages/index.php">Materias</a></li>
            <li><a href="#">Agregar Notas</a></li>
            <button class = "btn">Cerrar Sesion</button>
        </ul>
    </nav>
    <br>
    <h1>Lista de docentes</h1>
    <div class="container2">
        <table>
            <tr>
                <th class="header">Id Docente</th>
                <th class="header">Nombre</th>
                <th class="header">Apellido</th>
                <th class="header">Documento</th>
                <th class="header">Correo</th>
                <th class="header">Materia</th>
                <th class="header">Actualizar</th>
                <th class="header" >Eliminar</th>

            </tr>

            <tbody>
                <?php
                require_once('../../conexion.php');
                require_once('../modelos/docente.php');

                $obj =  new Docente();
                $datos = $obj-> getDocente();

                foreach ($datos as $key)
                {

                
                ?>
                <tr>
                    <td><?php echo $key ['id_docente']?></td>
                    <td><?php echo $key ['NombreDoc']?></td>
                    <td><?php echo $key ['ApellidoDoc']?></td>
                    <td><?php echo $key ['DocumentoDoc']?></td>
                    <td><?php echo $key ['CorreoDoc']?></td>
                    <td><?php echo $key ['Materia']?></td>
                    <td ><a href="editar.php?ID=<?php echo $key ['id_docente']?>" class="enlace">Actualizar</a></td>
                    <td ><a href="eliminar.php?ID=<?php echo $key ['id_docente']?>" class="enlace">Eliminar</a></td>
                </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>