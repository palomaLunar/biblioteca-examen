<?php
require_once "models/libros.modelo.php";
require_once "models/admin/login.modelo.php";

class InicioControlador
{
  private $modelo;
  public function __construct()
  {
    $this->modelo = new Libro();
  }

  public function Inicio()
  {
    require_once "views/inicio/login.php";
  }

  public function Login()
  {
    $datos = array(
      "usuario" => $_POST["admin"],
      "password" => $_POST["password"]
    );
    $login = new Login();
    $login->comprobar($datos);
  }
}
