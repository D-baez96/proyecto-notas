<?php
include_once('../../Usuarios/modelos/Usuario.php');

$model= new Usuario();
$model -> validarSesion();
if(!$_SESSION['validar'])
{
    print "<script>alert(\"Es para usuarios registrados\");
    window.location='../../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesAdmin.css">
    <title>Admin Navbar</title>
</head>
<body>
    <nav class="container">
        <div class ="text">
            <h1>Administrador 🤯</h1>
        </div>
        <ul class="navbar">
            
            <li><a href="../../Materias/pages/agregarMat.php">Materias</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="../../Docente/pages/agregarDoc.php">Docentes</a></li>
            <li><a href="../../Estudiante/pages/agregarEstu.php">Estudiantes</a></li>
            <button class = "btn"><a href="../../Usuarios/modelos/Salir.php" class="aa">Cerrar Sesion</a></button>
        </ul>
    </nav>

    <br>
    
    <h1>Lista de usuarios</h1>
    <h2>Hola <?php echo $_SESSION['usuario']?></h2>
    <div class="container2">
        <table>
            <tr>
                <th class="header">Id Usuario</th>
                <th class="header">Nombre</th>
                <th class="header">Apellido</th>
                <th class="header">Usuario</th>
                <th class="header">Perfil</th>
                <th class="header">Estado</th>
                <th class="header">Actualizar</th>
                <th class="header" >Eliminar</th>

            </tr>

            <tbody>
                <?php
                require_once('../../conexion.php');
                require_once('../modelos/administrador.php');

                $obj =  new Administrador();
                $datos = $obj-> getadmin();

                foreach ($datos as $key)
                {

                
                ?>
                <tr>
                    <td><?php echo $key ['id_usuario']?></td>
                    <td><?php echo $key ['NombreUsu']?></td>
                    <td><?php echo $key ['ApellidoUsu']?></td>
                    <td><?php echo $key ['Usuario']?></td>
                    <td><?php echo $key ['Perfil']?></td>
                    <td><?php echo $key ['Estado']?></td>
                    <td ><a href="editar.php?ID=<?php echo $key ['id_usuario']?>" class="enlace">Actualizar</a></td>
                    <td ><a href="eliminar.php?ID=<?php echo $key ['id_usuario']?>" class="enlace">Eliminar</a></td>
                </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>