<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estuAgr.css">
    <title>Document</title>
</head>
<body>
<div class="contenedor">

<?php
require_once('../../conexion.php');
require_once('../../metodos.php');

$me = new Consulta();
$do = new Consulta();
?>
        <form action="..\controladores\agregarEstudiante.php" method="POST">
            <h2>Registrar Estudiante</h2>
            <div class="inputbox">
            <label for="Nombre">Nombre: </label>
            <input type="text" name="nombre">
            <br>
            </div>
            <div class="inputbox">
            <label for="Apellido">Apellido: </label>
            <input type="text" name="apellido">
            <br>
            </div>
            <div class="inputbox">
            <label for="Documento">Documento </label>
            <input type="text" name="documento">
            <br>
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
            <label for="Docente">Docente</label>
            <select name="docente">
            <option>Seleccionar</option>
            <?php
                    $doce = $do-> getDocente();
                    if ($doce != null)
                    {
                        foreach ($doce as $doc) 
                        {
                            ?>
                            <option value="<?php echo $doc['NombreDoc'].' '. $doc['ApellidoDoc'];?>"> <?php echo $doc['NombreDoc'].' '. $doc['ApellidoDoc'];?></option>
                            <?php
                        }
                    }
                    ?>
            </select>
            <br>
            </div>
            <div class="inputbox">
            <label for="fecha">Nota final </label>
            <input type="number" name="fecha">
            </div>
            <div class="inputbox">
            <label for="fecha">Fecha de registro </label>
            <input type="date" name="fecha">
            <br>
            </div>
            <div class="inputbox">
            <label for="Correo">Correo</label>
            <input type="email" name="correo">
            <br>
            </div>
            <br>
            <input type="submit" class="boton">

        </form>
    </div>
</body>
</html>