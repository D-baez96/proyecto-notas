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

     //funcion para consultar usuarios
    public function getMa() {
        $sql= "SELECT * FROM materias";
        $result = $this->bd->query($sql);
        $dataM = array();
        if($result->rowCount()>0)
        {
        while ($row = $result->fetch()) {
            $dataM[] = $row;
        }
    }
        return $dataM;
    
}   

    //funcion para listar por id especifico
    public function getidMa($ID) {
        $statement = $this->bd->prepare("SELECT * FROM materias WHERE id_materia=:ID");
        $statement->bindParam(':ID', $ID);
        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }

    //funcion actualizar los datos del usuario
    public function updateMa($ID, $NombreMa) {
        $statement = $this->bd->prepare("UPDATE materias SET id_materia=:ID, NombreMa= :NombreMa WHERE id_materia=$ID");
        $statement->bindParam(':ID', $ID);
        $statement->bindParam(':NombreMa', $NombreMa);

        if ($statement->execute()) {
            echo "<script>
                alert('La materia ha sido actualizada');
                window.location= '../pages/index.php';
            </script>";
        } else {
            echo "<script>
                alert('La materia no ha sido actualizada');
                window.location= '../pages/editar.php';
            </script>";
        }
    }

    //funcion eliminar usuario
    public function deleteMa($ID) {
        $statement = $this->bd->prepare("DELETE FROM materias WHERE id_materia=:ID");
        $statement->bindParam(':ID', $ID);
        if ($statement->execute()) {
            echo "Materia eliminada";
            header('location: ../pages/index.php');
        } else {
            echo "No se ha podido eliminar";
            header ('location: ../pages/eliminar.php');
        }
    }
}
?>