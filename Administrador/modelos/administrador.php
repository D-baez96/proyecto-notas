<?php
include_once('../../conexion.php');
class Administrador extends connection
{
    public function __construct()
    {
        $this-> bd = parent::__construct();
    }

    //funcion para registrar los usuarios 

    public function addAdmi($NombreUsu,$ApellidoUsu, $UsuarioUsu, $PasswordUsu, $Perfil, $EstadoUsu)
    {
    //crear sentncia slq
    $statement = $this-> bd -> prepare("INSERT INTO usuarios(NombreUsu,ApellidoUsu,Usuario,Contraseña,Perfil,Estado) VALUES( :NombreUsu, :Usuario,  :Contraseña, :'Administrador', :'Activo')");

    $statement -> bindParam(':NombreUsu',$NombreUsu)
    $statement -> bindParam(':ApellidoUsu',$ApellidoUsu)
    $statement -> bindParam(':Usuario',$Usuario)
    $statement -> bindParam(':PasswordUsu',$PasswordUsu)
    $statement -> bindParam(':Perfil',$Perfil)
    $statement -> bindParam(':EstadoUsu',$EstadoUsu)

    if($statement ->execute())
    {
        echo "Usuario registrado";
        header (Location: '../pages/index.php');
    }else{
        echo "Usuario no registrado";
        header (Location: '../agregar.php');
    }
    }
    
//funcion para consultar todos los usuarios administradores
    public function getAdmin()
    {
        $row = null;
        $statement=$this->bd->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador'");
        $statement -> execute();
        while ($result->$statement -> fetch())
        {
            $row[] = $result;
        }
        result $row;
    }
//funcion para consultar el usuario de acuerdo a su id
    public function getIDadmin($id)
    {
        $row = null;
        $statement=$this->bd->prepare("SELECT * FROM usuarios WHERE id_usuario = :id and Perfil = 'Administrador'");
        $statement -> bindParam(':id', $id);
        $statement -> execute();
        while ($result->$statement -> fetch())
        {
            $row[] = $result;
        }
        result $row;
    }

    //funcion actualizar los datos de usuario
    public function updateAd($id,$NombreUsu,$ApellidoUsu, $UsuarioUsu, $PasswordUsu, $EstadoUsu)
    {
        $statement=$this->bd->prepare("UPDATE usuarios SET NombreUsu = :NombreUsu, ApellidoUsu = :ApellidoUsu, Usuario= :UsuarioUsu, Contraseña= :PasswordUsu, Estado = :EstadoUsu WHERE id_usuario = $id");
        $statement -> bindParam(':id', $id);
        $statement -> bindParam(':NombreUsu',$NombreUsu)
        $statement -> bindParam(':ApellidoUsu',$ApellidoUsu)
        $statement -> bindParam(':Usuario',$Usuario)
        $statement -> bindParam(':PasswordUsu',$PasswordUsu)
        $statement -> bindParam(':EstadoUsu',$EstadoUsu)
        if ($statement->execute())
        {
            echo "Usuario actualizado";
            header('Location: ../pages/index.php');
        }else{
            echo "Usuario no se ha podido actualizar";
            header('Location: ../pages/editar.php');
        }
    }

    //funcion para eliminar usuario
    public function deleteAd($id)
    {
        $statement=$this->bd->prepare("DELETE FROM usuarios WHERE id_usuario= :id");
        $statement -> bindParam(':id', $id);
        if($statement -> execute())
        {
            echo "Usuario eliminado";
            header('Location: ../pages/index.php');
        }else{
            echo "Error no se ha podido eliminar usuario";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>