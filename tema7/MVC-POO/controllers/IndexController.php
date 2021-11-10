<?php
/**
 * Controlador de la página abierta de inicio del sitio, desde la que se puede hacer el login y el registro
 * y otros métodos que no requieran estar autenticado
 */

 /**
 * Incluimos todos los modelos que necesite este controlador
 */
require_once MODELS_FOLDER . 'User.php';
require_once MODELS_FOLDER . 'UserDAOImpPDO.php';

class IndexController extends BaseController
{
   // El atributo $dao será a través del que podremos acceder a los datos 
   private $daoUser;

   public function __construct()
   {
      parent::__construct();
      $this->daoUser = new UserDAOImpPDO();
   }

   /**
    * Muestra la página del sitio no autenticada
    *
    * @return void
    */
   public function index()
   {
      $this->view->show("InicioGuest");
   }

   /**
    * Muestra la vista de login
    *
    * @return void
    */
   public function login()
   {
      $parametros = [
         "mensajes" => []
      ];
      $this->view->show("Login", $parametros);
   }

   /**
    * Maneja la solicitud de petición de login
    * Recibo de POST los datos de login y usuario
    *
    * @return void
    */
    public function autenticate()
    {
      if(isset($_POST['submit'])){
         // Pulso el botón Entrar del login. El login es el nombre
         $login = filter_var($_POST['login'],FILTER_SANITIZE_STRING);
         $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
         $modelo = $this->daoUser->validarUsuario($login, $password);
         if($user = $modelo['datos']){
            // Comienzo sesión y guardo los datos del usuario autenticado
            session_start();
            $_SESSION['login'] = $user->getNombre();
            // Salto a la página inicial de mi portal
            $this->redirect("home","index");
         }else { // Autenticación no correcta
            $parametros = [
               "mensajes" => [[
                              "tipo" => "danger",
                              "mensaje" => "¡El usuario o la contraseña no son correctos!"]
                           ]
            ];
            $this->view->show("Login", $parametros);
         }
      }else{
         // Caso raro de que entre con la url ?controller=index&action=autenticate
         $this->redirect("index","login");
      } 
    }

   /**
    * Muestra la vista de registro
    *
    * @return void
    */
   public function register()
   {
      
   }

   /**
    * Procesar la vista de registro
    *
    * @return void
    */
    public function storeRegister()
    {
       
    }

   /**
    * Otras acciones que puedan ser necesarias
    */
}
