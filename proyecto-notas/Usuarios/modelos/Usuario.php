<?php
include_once('../../conexion.php');
class Usuario extends connection 
{
  public function __construct()
  {
    $this->bd=parent::__construct();
  }

  public function login($Usuario,$Password)
  {
    $statement = $this->bd->prepare("SELECT * FROM  usuarios WHERE Usuario=:Usuario AND PasswordUsu=:PasswordUsu");
//Se vincula la variable al parametro y en el momento de hacer el execute es cuando se asigna el valor de la variable a ese parámetro 
    $statement->bindParam(':Usuario',$Usuario);
    $statement->bindParam(':PasswordUsu',$Password);
    $statement->execute();

    if($statement->rowCount() == 1)
    {
        $result=$statement->fetch();
        $_SESSION['usuario']=$result['NombreUsu'].' '.$result['ApellidoUsu'];
        $_SESSION['id']=$result['id_usuario'];
        $_SESSION['Perfil']=$result['Perfil'];
        $_SESSION['start']=time();
        $_SESSION['expire']=$_SESSION['start'] + (1*60);

        return true;
    }

    return false;
  }

  public function validarSesion()
  {
    if($_SESSION['id']==null)
    {
        echo "<script>alert('Datos incorrectos');
        window.location='../../index.php';</script>";
    }
    $now = time();
    if($now > $_SESSION['expire'])
    {
        session_destroy();
        echo "<script>alert('Debe ingresar nuevamente');
        window.location='../../index.php';</script>";
    }
  }
  
  public function cerrarSesion()
  {
    session_start();
    session_destroy();

    echo "<script>alert('Cierre de sesión exitoso');
    window.location='../../index.php';</script>";
  }

  public function validarRoles()
  {
    
  }
}
?>