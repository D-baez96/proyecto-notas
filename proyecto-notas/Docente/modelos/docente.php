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

    //funcion para consultar usuarios
    public function getDocente() {
        $sql= "SELECT * FROM docente";
        $result = $this->bd->query($sql);
        $dataDo = array();
        if($result->rowCount()>0)
        {
        while ($row = $result->fetch()) {
            $dataDo[] = $row;
        }
    }
        return $dataDo;
    
}   

    //funcion para listar por id especifico
    public function getidDo($ID) {
        $statement = $this->bd->prepare("SELECT * FROM docente WHERE id_docente=:ID");
        $statement->bindParam(':ID', $ID);
        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }

    //funcion actualizar los datos del usuario
    public function updateDocente($ID, $NombreDoc, $ApellidoDoc, $DocumentoDoc, $CorreoDoc, $MateriaDoc, $PasswordDoc) {
        $statement = $this->bd->prepare("UPDATE docente SET id_docente=:ID, NombreDoc=:NombreDoc, ApellidoDoc=:ApellidoDoc, DocumentoDoc=:DocumentoDoc, CorreoDoc=:CorreoDoc, MateriaDoc=:MateriaDoc ,PasswordDoc=:PasswordDoc WHERE id_docente=$ID");
        $statement->bindParam(':ID', $ID);
        $statement->bindParam(':NombreDoc', $NombreDoc);
        $statement->bindParam(':ApellidoDoc', $ApellidoDoc);
        $statement->bindParam(':DocumentoDoc', $DocumentoDoc);
        $statement->bindParam(':CorreoDoc', $CorreoDoc);
        $statement->bindParam(':MateriaDoc', $MateriaDoc);
        $statement->bindParam(':PasswordDoc', $PasswordDoc);
        if ($statement->execute()) {
            echo "<script>
                alert('El docente ha sido actualizado');
                window.location= '../pages/index.php';
            </script>";
        } else {
            echo "<script>
                alert('El docente no ha sido actualizado');
                window.location= '../pages/editar.php';
            </script>";
        }
    }

    //funcion eliminar usuario
    public function deleteDocente($ID) {
        $statement = $this->bd->prepare("DELETE FROM docente WHERE id_docente=:ID");
        $statement->bindParam(':ID', $ID);
        if ($statement->execute()) {
            echo "Docente eliminado";
            header('location: ../pages/index.php');
        } else {
            echo "error no se puede eliminar";
            header ('location: ../pages/eliminar.php');
        }
    }
}
?>
