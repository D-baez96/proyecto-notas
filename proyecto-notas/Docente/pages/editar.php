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
            <h1>Administrador 🤯</h1>
        </div>
        <ul class="navbar">
            
            <li><a href="#">Materias</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="#">Docentes</a></li>
            <li><a href="#">Estudiantes</a></li>
            <button class = "btn">Cerrar Sesion</button>
        </ul>
    </nav>

    <?php
    include_once('../../Conexion.php');
    include_once('../modelos/administrador.php');
    $ID = $_GET['ID'];

    $admin = new Administrador ();
    $row= $admin->getidad($ID);
    if($row){
?>

    <div class="div-container">
        <form action="" class="form-container">
            <label for="nombre" >Nombre</label>
            <input type="text" placeholder="Nombre" value="<?php echo $row['NombreUsu'] ?>">
            <br>
            <label for="apellido">Apellido</label>
            <input type="text" placeholder="Apellido" value="<?php echo $row['ApellidoUsu'] ?>">
            <br>
            <br>
            <label for="usuario">Usuario</label>
            <input type="text" placeholder="Usuario" value="<?php echo $row['Usuario'] ?>">
            <br>
            <br>
            <label for="contraseña">Contraseña</label>
            <input type="password" placeholder="Contraseña" value="<?php echo $row['PasswordUsu'] ?>">
            <br>
            <br>
            <label for="perfil">Perfil</label>
            <input type="text" placeholder="Perfil" value="<?php echo $row['Perfil'] ?>">
            <br>
            <br>
            <label for="estado">Estado</label>
            <input type="text" placeholder="Estado" value="<?php echo $row['Estado'] ?>">
            <br>
            <br>
            <button class="btn-form" type="submit">Editar</button>
        </form>
        <?php }?>
    </div>
</body>
</html>