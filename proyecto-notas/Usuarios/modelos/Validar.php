<?php
  session_start();

  if(!$_SESSION['validacion']){
    echo
    "<script>
      alert('Solo para Usuarios Registrados');
      window.location='../../index.php';
    </script>";
  }
  $now = time();
  if($now > $_SESSION['expire']){
    session_destroy();
    echo
    "<script>
      alert('Sesion Expirada');
      window.location='../../index.php';
    </script>";
  }
?>