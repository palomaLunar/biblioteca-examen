<?php

// define('HOSTNAME', 'localhost');
// define('DBNAME', 'libreria_mvc');
// define('USERNAME', 'root');
// define('USERPASS', '');

// try {
//   // instancia PDO para la base de datos
//   $conexion = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DBNAME, USERNAME, USERPASS);

//   // modo de error PDO a excepciones
//   $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // echo 'conexión realizada con éxito';
// } catch (PDOException $e) {
//   echo 'Error en la conexión: ' . $e->getMessage();
//   die();
// };

class DataBase
{
  // Constastes de la base de datos
  const SERVIDOR = 'localhost';
  const USUARIODB = 'root';
  const PASSDB = '';
  const NOMBREDB = 'libreria_mvc';

  // Conexión a la base de datos
  public static function Conectar()
  {
    try {
      $conexion = new PDO("mysql:host=" . self::SERVIDOR . ";dbname=" . self::NOMBREDB . ";charset=utf8", self::USUARIODB, self::PASSDB);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conexion;
    } catch (PDOException $e) {
      die("Error: " . $e->getMessage());
    }
  }
}
