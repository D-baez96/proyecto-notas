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
        $sql= "SELECT * FROM usuarios WHERE Perfil='Administrador'";
        $result = $this->bd->query($sql);
        $data = array();
        if($result->rowCount()>0)
        {
        while ($row = $result->fetch()) {
            $data[] = $row;
        }
    }
        return $data;
    
}   

    //funcion para listar por id especifico
    public function getidad($ID) {
        $statement = $this->bd->prepare("SELECT * FROM usuarios WHERE id_usuario=:ID");
        $statement->bindParam(':ID', $ID);
        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }

    //funcion actualizar los datos del usuario
    public function updatead($ID, $NombreUsu, $ApellidoUsu, $Usuario, $PasswordUsu,$Perfil,$Estado) {
        $statement = $this->bd->prepare("UPDATE usuarios SET id_usuario=:ID, NombreUsu=:NombreUsu, ApellidoUsu=:ApellidoUsu, Usuario=:Usuario, PasswordUsu=:PasswordUsu, Perfil=:Perfil ,Estado=:Estado WHERE id_usuario=$ID");
        $statement->bindParam(':ID', $ID);
        $statement->bindParam(':NombreUsu', $NombreUsu);
        $statement->bindParam(':ApellidoUsu', $ApellidoUsu);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':PasswordUsu', $PasswordUsu);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estado', $Estado);
        if ($statement->execute()) {
            echo "<script>
                alert('El usuario está actualizado');
                window.location= '../pages/index.php';
            </script>";
        } else {
            echo "<script>
                alert('El usuario no está actualizado');
                window.location= '../pages/editar.php';
            </script>";
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
