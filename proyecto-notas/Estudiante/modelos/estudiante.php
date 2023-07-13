<?php
include_once('../../conexion.php');
class Estudiante extends connection {
    public function __construct() {
        $this->bd = parent::__construct();
    }

    //funcion para registrar usuarios
    public function addEstudiante($NombreEst, $ApellidoEst, $DocumentoEst, $CorreoEst, $MateriaEst, $DocenteEst, $Fecha_registro) {
        $statement = $this->bd->prepare("INSERT INTO estudiante (NombreEs, ApellidoEs, Documento, Correo, Materia, Docente,Fecha_registro) VALUES (:NombreEs, :ApellidoEs, :Documento, :Correo, :Materia, :Docente, :Fecha_registro)");
        $statement->bindParam(':NombreEs', $NombreEst);
        $statement->bindParam(':ApellidoEs', $ApellidoEst);
        $statement->bindParam(':Documento', $DocumentoEst);
        $statement->bindParam(':Correo', $CorreoEst);
        $statement->bindParam(':Materia', $MateriaEst);
        $statement->bindParam(':Docente', $DocenteEst);
        $statement->bindParam(':Fecha_registro', $Fecha_registro);

        if ($statement->execute()) {
            echo "Docente registrado";
            header('Location: ../pages/index.php');
        } else {
            echo "Docente no registrado";
            header('Location: ../pages/agregarEstu.php');
        }
    }
}
?>
