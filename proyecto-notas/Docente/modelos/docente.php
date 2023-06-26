<?php
include_once('../../conexion.php');
class Docente extends connection {
    public function __construct() {
        $this->bd = parent::__construct();
    }

    //funcion para registrar usuarios
    public function addDocente($NombreDoc, $ApellidoDoc, $DocumentoDoc, $CorreoDoc, $MateriaDoc, $PasswordDoc) {
        $statement = $this->bd->prepare("INSERT INTO docente (NombreDoc, ApellidoDoc, DocumentoDoc, CorreoDoc, MateriaDoc, PasswordDoc) VALUES (:NombreDoc, :ApellidoDoc, :DocumentoDoc, :CorreoDoc, :MateriaDoc, :PasswordDoc)");
        $statement->bindParam(':NombreDoc', $NombreDoc);
        $statement->bindParam(':ApellidoDoc', $ApellidoDoc);
        $statement->bindParam(':DocumentoDoc', $DocumentoDoc);
        $statement->bindParam(':CorreoDoc', $CorreoDoc);
        $statement->bindParam(':MateriaDoc', $MateriaDoc);
        $statement->bindParam(':PasswordDoc', $PasswordDoc);

        if ($statement->execute()) {
            echo "Docente registrado";
            header('Location: ../pages/index.php');
        } else {
            echo "Docente no registrado";
            header('Location: ../pages/agregarDoc.php');
        }
    }
}
?>
