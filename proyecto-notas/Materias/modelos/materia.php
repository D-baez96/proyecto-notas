<?php
include_once('../../conexion.php');
class Materia extends connection {
    public function __construct() {
        $this->bd = parent::__construct();
    }

    //funcion para registrar usuarios
    public function addMateria($NombreUsu, $ApellidoUsu, $Usuario, $PasswordUsu, $Perfil, $Estado) {
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
            header('Location: ../pages/agregar.php');
        }
    }
}
?>