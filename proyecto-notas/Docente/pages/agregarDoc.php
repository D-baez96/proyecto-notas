<?php
include_once("../../Usuarios/controladores/controlUsuario.php");?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/docAgr.css">
    <title>Agregar</title>
</head>
<body>
    <div class="contenedor">
    <?php
require_once('../../conexion.php');
require_once('../../metodos.php');

$me = new Consulta();

?>
        <form action="..\controladores\agregarDocente.php" method="POST">
            <h2>Registrar Docente</h2>
            <div class="inputbox">
            <label for="Nombre">Nombre: </label>
            <input type="text" name="nombre">
            <br>
            </div>
            <div class="inputbox">
            <label for="Apellido">Apellido: </label>
            <input type="text" name="apellido" >
            <br>
            </div>
            <div class="inputbox">
            <label for="Documento">Documento: </label>
            <input type="number" name="documento" >
            <br>
            </div>
            <div class="inputbox">
            <label for="correo">Correo: </label>
            <input type="email" name="correo">
            <br>
            </div>
            <div class="inputbox">Perfil:</label>
                <label for="perfil">
                    <select name="txtperfil" >
                    <option ></option>
                        <option>Administrador</option>
                        <option>Docente</option>
                    </select>
                
            </div>
            <div class="inputbox">
            <label for="Materia">Materia</label>
            <select name="materia" id="">Materia
                <option>Seleccionar</option>
                    <?php
                    $mate = $me-> getMaterias();
                    if ($mate != null)
                    {
                        foreach ($mate as $ma) 
                        {
                            ?>
                            <option value="<?php echo $ma['NombreMa'];?>"> <?php echo $ma['NombreMa'];?></option>
                            <?php
                        }
                    }
                    ?>
                
            </select>
            <br>
            </div>
            <div class="inputbox">
                <label for="Estado">Estado</label>
                    <select name="txtestado" >
                        <option ></option>
                        <option name="txtestado">Activo</option>
                        <option name="txtestado">Inactivo</option>
                    </select>
            </div>
            <div class="inputbox">
            <label for="Contraseña">Contraseña </label>
            <input type="password" name="contrasena">
            <br>
            <input type="submit" class="boton">
            </div>
            
        </form>
    </div>
</body>
</html>