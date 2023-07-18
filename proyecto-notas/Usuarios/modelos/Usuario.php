<?php
// BindParam: Se vincula la variable al parametro y en el momento de hacer el execute es cuando se asigna el valor de la variable a ese parámetro 
include_once('../../conexion.php');
session_start();
class Usuario extends connection 
{
  //Validar el estado de los diferentes roles
  private $loggedIn = false; //Estado de inicio de sesión
  private $isAdmin = false; // Estado de administrador
  private $isDocente = false; //Esatdo de docente

  public function __construct()
  {
    $this->bd=parent::__construct();
  }

  public function login($Usuario,$Password)
  {
    $statement= $this->bd->prepare("SELECT * FROM usuarios WHERE Usuario = ?");
    $statement -> execute([$Usuario]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($Password,$user['password']))
    {
      //iniciar sesión
        $_SESSION['id_usuario']=$user['id_usuario'];
        $_SESSION['username']=$user['Usuario'];
        $_SESSION['role']=$user['Perfil'];
        $_SESSION['validar']=true;
        $_SESSION['nombre']=$user['NombreUsu'].' '.$user['ApellidoUsu'];

    }
  }

  public function validarSesion()
  {
    if($_SESSION['id_usuario'])
    {
      if(!isset($_SESSION['start']))
      {
        $_SESSION[$start] = time();
      }else if(time() - $_SESSION['start'] > 60)
      {
        session_destroy();
        echo "<script> alert('Cierre de sesión por inactividad'); windows.location='../../index.php';</script>";
        $_SESSION['validar'] == false;
      }
      $_SESSION['start']= time();
    }
  }
  
  public function cerrarSesion()
  {
    session_unset(); //para que se cierre la sesion
    session_destroy(); //cierra todas las variables SESSION
  }

  public function isloggedIn()
  {
    return isset($_SESSION['id_usuario']);
  }

  public function isAdmin()
  {
    return $this->isloggedIn() && $_SESSION['role'] == 'Administrador';
  }

  public function isDocente()
  {
    return $this->isloggedIn() && $_SESSION['role'] == 'Docente';
  }
}
?>