<?php
include_once('../../conexion.php');
class Administrador extends connection {
    public function __construct() {
        $this->bd = parent::__construct();
    }

    //funcion para registrar usuarios
    public function addAdmi($NombreUsu, $ApellidoUsu, $Usuario, $PasswordUsu, $Perfil, $Estado) {
        $statement = $this->bd->prepare("INSERT INTO usuarios (NombreUsu, ApellidoUsu, Usuario, PasswordUsu, Perfil, Estado) VALUES (:NombreUsu, :ApellidoUsu, :Usuario, :PasswordUsu, :Perfil, :Estado)");
        $statement->bindParam(':NombreUsu', $NombreUsu);
        $statement->bindParam(':ApellidoUsu', $ApellidoUsu);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':PasswordUsu', $PasswordUsu);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estado', $Estado);

        if ($statement->execute()) {
            echo "usuario registrado";
            header('Location: ../pages/index.php');
        } else {
            echo "usuario no registrado";
            header('Location: ../pages/agregarAdmin.php');
        }
    }

    //funcion para consultar usuarios
    public function getadmin() {
        $row = null;
        $statement = $this->bd->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador'");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
    }

    //funcion para listar por id especifico
    public function getidad($ID) {
        $row = null;
        $statement = $this->bd->prepare("SELECT * FROM usuarios WHERE id_usuario=:ID AND Perfil='Administrador'");
        $statement->bindParam(':ID', $ID);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
    }

    //funcion actualizar los datos del usuario
    public function updatead($ID, $NombreUsu, $ApellidoUsu, $Usuario, $PasswordUsu, $Estado) {
        $statement = $this->bd->prepare("UPDATE usuarios SET NombreUsu=:NombreUsu, ApellidoUsu=:ApellidoUsu, Usuario=:Usuario, PasswordUsu=:PasswordUsu, Estado=:Estado WHERE id_usuario=:ID");
        $statement->bindParam(':ID', $ID);
        $statement->bindParam(':NombreUsu', $NombreUsu);
        $statement->bindParam(':ApellidoUsu', $ApellidoUsu);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':PasswordUsu', $PasswordUsu);
        $statement->bindParam(':Estado', $Estado);
        if ($statement->execute()) {
            header('location: ../pages/index.php');
        } else {
            echo "el usuario no";
            header('location: ../pages/editar.php');
        }
    }

    //funcion eliminar usuario
    public function deletead($ID) {
        $statement = $this->bd->prepare("DELETE FROM usuarios WHERE id_usuario=:ID");
        $statement->bindParam(':ID', $ID);
        if ($statement->execute()) {
            echo "usuario eliminado";
            header('location: ../pages/index.php');
        } else {
            echo "error no se puede eliminar";
            header ('location: ../pages/eliminar.php');
        }
    }
}
?>
