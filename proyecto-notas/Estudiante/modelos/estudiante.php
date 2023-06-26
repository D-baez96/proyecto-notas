<?php
include_once('../../conexion.php');
class Estudiante extends connection {
    public function __construct() {
        $this->bd = parent::__construct();
    }

    //funcion para registrar usuarios
    public function addEstudiante($NombreEst, $ApellidoEst, $DocumentoEst, $CorreoEst, $MateriaEst, $DocenteEst, $Fecha_registro, $PasswordEst) {
        $statement = $this->bd->prepare("INSERT INTO estudiante (NombreEst, ApellidoEst, DocumentoEst, CorreoEst, MateriaEst, DocenteEst,Fecha_registro,PasswordEst) VALUES (:NombreEst, :ApellidoEst, :DocumentoEst, :CorreoEst, :MateriaEst, :DocenteEst, :Fecha_registro, :PasswordEst)");
        $statement->bindParam(':NombreEst', $NombreEst);
        $statement->bindParam(':ApellidoEst', $ApellidoEst);
        $statement->bindParam(':DocumentoEst', $DocumentoEst);
        $statement->bindParam(':CorreoEst', $CorreoEst);
        $statement->bindParam(':MateriaEst', $MateriaEst);
        $statement->bindParam(':DocenteEst', $DocenteEst);
        $statement->bindParam(':Fecha_registro', $Fecha_registro);
        $statement->bindParam(':PasswordEst', $PasswordEst);

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
