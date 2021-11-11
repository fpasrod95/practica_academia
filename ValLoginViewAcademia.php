<?php

/**
 * Script que muestra en una tabla los valores enviados por el usuario a través 
 * del formulario utilizando el método POST
 */
// Definimos e inicializamos el array de errores y las variables asociadas a cada campo
$errors    = [];
$nombre    = "";
$apellidos = "";
$mibiograf = "";
$correo    = "";
$password  = "";
$perfil    = "";


function filtrado($datos){
    $datos = trim($datos); //Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); //Elimina backslashes\
    $datos = htmlspecialchars($datos); //Traduce caracteres especiales en entidades HTML
    return $datos;
}

function recoge($var, $m = ""){
  if (!isset($_REQUEST[$var])) {
     $tmp = (is_array($m)) ? [] : "";
  } elseif (!is_array($_REQUEST[$var])) {
     $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
  } else {
     $tmp = $_REQUEST[$var];
     array_walk_recursive($tmp, function (&$valor) {
           $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
     });
  }
  return $tmp;
}

// Función que muestra el mensaje de error bajo el campo que no ha superado
// el proceso de validación
function mostrar_error($errors, $campo) {
  $alert = "";
  if (isset($errors[$campo]) && (!empty($campo))) {
    $alert = '<div class="alert alert-danger" style="margin-top:5px;">' . $errors[$campo] . '</div>';
  }
  return $alert;
}

// Verificamos si todos los campos han sido validados
function validez($errors) {
  if (isset($_POST["submit"]) && (count($errors) == 0)) {
    return '<div class="alert alert-success" style="margin-top:5px;"> Formulario validado correctamente!! :)</div>';
  }
}

// Visualización de las variables obtenidas mediante el formulario
// function valoresfrm() {
//   global $nombre,$apellidos,$mibiograf,$correo,$password,$perfil;
 
//   echo "<h4>Valores obtenidos mediante el formulario</h4><br/>";
//   echo "<strong>Nombre:</strong>" . $nombre . "<br/>";
//   echo "<strong>Apellidos:</strong>" . $apellidos . "<br/>";
//   echo "<strong>Biografía:</strong>" . $mibiograf . "<br/>";
//   echo "<strong>Email:</strong>" . $correo . "<br/>";
//   echo "<strong>Contraseña:</strong>" . $password . "<br/>";
//   echo "<strong>Perfil:</strong>" . $perfil . "<br/>";
//   echo "<strong>Fotografía:</strong>" . $_FILES["image"]["tmp_name"] . "<br/>";
// }

if (isset($_POST["submit"])) {

  if (!empty($_POST["login"]) && (!preg_match("/[0-9]/", $_POST["name"])) && (strlen($_POST["name"]) < 15)) {
    $nombre = filtrado($_POST["name"]);
  } else {
    $errors["name"] = "El nombre introducido no es válido :(";
  }

  if (!empty($_POST["password"]) && (strlen($_POST["password"]) > 6) && (strlen($_POST["password"]) <= 10)) {
    $password = filtrado($_POST["password"]);
  } else {
    $errors["password"] = "Introduzca una contraseña válida (6-10 caracteres) :(";
  }

  if (!empty($_POST["name"]) && (!preg_match("/[0-9]/", $_POST["name"])) && (strlen($_POST["name"]) < 15)) {
    $nombre = filtrado($_POST["name"]);
  } else {
    $errors["name"] = "El nombre introducido no es válido :(";
  }

  if (!empty($_POST["name"]) && (!preg_match("/[0-9]/", $_POST["name"])) && (strlen($_POST["name"]) < 15)) {
    $nombre = filtrado($_POST["name"]);
  } else {
    $errors["name"] = "El nombre introducido no es válido :(";
  }

  if (!empty($_POST["name"]) && (!preg_match("/[0-9]/", $_POST["name"])) && (strlen($_POST["name"]) < 15)) {
    $nombre = filtrado($_POST["name"]);
  } else {
    $errors["name"] = "El nombre introducido no es válido :(";
  }

  if (!empty($_POST["name"]) && (!preg_match("/[0-9]/", $_POST["name"])) && (strlen($_POST["name"]) < 15)) {
    $nombre = filtrado($_POST["name"]);
  } else {
    $errors["name"] = "El nombre introducido no es válido :(";
  }

  if (!empty($_POST["name"]) && (!preg_match("/[0-9]/", $_POST["name"])) && (strlen($_POST["name"]) < 15)) {
    $nombre = filtrado($_POST["name"]);
  } else {
    $errors["name"] = "El nombre introducido no es válido :(";
  }

  if (!empty($_POST["name"]) && (!preg_match("/[0-9]/", $_POST["name"])) && (strlen($_POST["name"]) < 15)) {
    $nombre = filtrado($_POST["name"]);
  } else {
    $errors["name"] = "El nombre introducido no es válido :(";
  }

}
?>
