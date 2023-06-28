<?php
include_once('../../conexion.php');
class Materia extends connection {
    public function __construct() {
        $this->bd = parent::__construct();
    }

    //funcion para registrar usuarios
    public function addMateria($NombreMa) {
        $statement = $this->bd->prepare("INSERT INTO materias (NombreMa) VALUES (:NombreMa)");
        $statement->bindParam(':NombreMa', $NombreMa);


        if ($statement->execute()) {
            echo "Materia registrada";
            header('Location: ../pages/index.php');
        } else {
            echo "Materia no registrada";
            header('Location: ../pages/agregar.php');
        }
    }
}
?>