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
    $login=recoge("login");
    $password=recoge("password");
    $nombre=recoge("nombre");
    $apellidos=recoge("apellidos");
    $nif=recoge("nif");
    $telefono=recoge("telefono");
    $email=recoge("email");
    $direccion=recoge("direccion");
    $imagen=recoge("imagen");
    if (empty($login) || strlen($nombre)>20 || (preg_match("/[0-9]/", $nombre))) {
       $errors["login"] = "El login no es válido: Está vacío o tiene longitud mayor a 20 o tiene algún número";
    }
    //Podemos usar filter_var
    //$apellidos=filter_var(($_POST["apellidos"]),FILTER_SANITIZE_STRING);
    if (empty($password) || !(preg_match("/^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/", $password))) {
        $errors["password"] = "La contraseña no es válida: Debe tener una longitud mínima de 8 caracteres y contener letras mayúsculas, minúsculas, números y caracteres especiales";
    }

    if (empty($nombre)) {
        $errors["nombre"] = "El nombre no puede estar vacía";
    }

    if (empty($apellidos)) {
        $errors["apellidos"] = "El nombre no puede estar vacía";
     }

     if (empty($nif)) {
        $errors["nif"] = "El nif no puede estar vacío";
     }

     if (empty($direccion)) {
        $errors["apellidos"] = "El nombre no puede estar vacía";
     }

     if (empty($telefono)) {
        $errors["telefono"] = "El telefono no puede estar vacía";
     }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors["email"] = "El email no es válido";
    }
    // https://riptutorial.com/es/regex/example/18996/una-contrasena-que-contiene-al-menos-1-mayuscula--1-minuscula--1-digito--1-caracter-especial-y-tiene-una-longitud-de-al-menos-10
    

    

 }
?>
