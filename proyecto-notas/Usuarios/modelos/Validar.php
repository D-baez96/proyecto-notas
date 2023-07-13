<?php
  session_start();

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