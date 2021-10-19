<?php
/*
Página de inicio a nuestro portal, una vez hemos logueado correctamente. Esto lo comprobamos 
con isset($_SESSION['logueado'])
*/
?> session_start();
  if(!isset($_SESSION['logueado'])){
     header ("Location: frmLogin.php?error=fuera");
  }

<html>
  <head lang="es">
    <?php require 'includes/header.php'; ?>
  </head>
  <body>
    <?php require 'includes/inicio.php'; ?>
    <?php require 'includes/footer.php'; ?>
  </body>
</html>