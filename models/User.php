<?php

/**
 *   Modelo de 'User'. Implementa el modelo de usuarios de nuestra aplicación en una
 *   arquitectura MVC. Define un objeto de tipo User
 */
class User
{
   
   /**
    * id  campo id del usuario
    *
    * @var int
    */
   private $id;
   private $nombre;
   private $apellidos;
   private $nif;
   private $direccion;
   private $telefono;
   private $email;
   private $password;
   private $imagen;
   private $estado;

   public function __construct($nombre = "", $nif="", $apellidos ="", $direccion ="", $telefono="",$email = "", $password = "", $imagen = "")
   {
      $this->nombre = $nombre;
      $this->nif =$nif;
      $this->apellidos= $apellidos;
      $this->direccion=$direccion;
      $this->telefono=$telefono;
      $this->email = $email;
      $this->password = $password;
      $this->imagen = $imagen;
   }

   public function getId()
   {
      return $this->id;
   }

   public function setId($id)
   {
      $this->id = $id;
   }

   public function getNombre()
   {
      return $this->nombre;
   }

   public function setNombre($nombre)
   {
      $this->nombre = $nombre;
   }

   public function getNif()
   {
      return $this->nif;
   }

   public function setNif($nif)
   {
      $this->nif = $nif;
   }

   public function getApellidos()
   {
      return $this->apellidos;
   }

   public function setApellidos($apellidos)
   {
      $this->apellidos = $apellidos;
   }

   public function getDireccion()
   {
      return $this->direccion;
   }

   public function setDireccion($direccion)
   {
      $this->direccion = $direccion;
   }

   public function getTelefono()
   {
      return $this->telefono;
   }

   public function setTelefono($telefono)
   {
      $this->telefono = $telefono;
   }

   public function getEmail()
   {
      return $this->email;
   }

   public function setEmail($email)
   {
      $this->email = $email;
   }

   public function getPassword()
   {
      return $this->password;
   }

   public function setPassword($password)
   {
      $this->password = $password;
   }

   public function getImagen()
   {
      return $this->imagen;
   }

   public function setImagen($imagen)
   {
      $this->imagen = $imagen;
   }

   public function __toString()
   {
      return $this->id . ": " . $this->nombre . " " .$this->nif . ":".$this->apellidos . " ".
      $this->direccion . " ".$this->telefono . ":". $this->email;
   }
}
