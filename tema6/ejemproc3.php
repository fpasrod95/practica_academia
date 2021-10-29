<?php
$host = "localhost";
$db = "pruebadao";
$usuario = "root";
$password = "";
try {
   $conex = new PDO("mysql:host=$host;dbname=$db", $usuario, $password);
   $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = 'CALL num_personas(@total)'; 

   $resultado = $conex->prepare($sql);
   $resultado->execute();
   // Recuperamos el valor del parámetro de salida
   $resultado->closeCursor(); //Permite limpiar y ejecutar la segunda query
   $result= $conex->query('SELECT @total AS total');
   $total= $result->fetchColumn();
   echo "Número total de personas=" .  $total;
} catch (PDOException $e) {
   die("Error al consultar :( !!:" .  $e->getMessage());
}
