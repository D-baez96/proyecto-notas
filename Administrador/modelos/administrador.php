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

    }
//funcion para consultar el usuario de acuerdo a su id
    public function getIDadmin($id)
    {

    }

    //funcion actualizar los datos de usuario
    public function updateAd($id,$NombreUsu,$ApellidoUsu, $UsuarioUsu, $PasswordUsu, $EstadoUsu)
    {

    }

    //funcion para eliminar usuario
    public function deleteAd($id)
    {

    }
}
?>