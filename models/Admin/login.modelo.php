<?php

class Login
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = DataBase::Conectar();
  }
  public function comprobar($datos)
  {
    $usuario = $datos['usuario'];
    $password = $datos['password'];

    $quey = "SELECT * FROM administradores WHERE admin = :admin AND password = :password";
    $sentenciaSQL = $this->pdo->prepare($quey);
    $sentenciaSQL->bindParam(':admin', $usuario);
    $sentenciaSQL->bindParam(':password', $password);
    try {
      $sentenciaSQL->execute();
      if ($sentenciaSQL->rowCount() == 0) {
        header('Location: index.php');
        exit();
      } else {
        $dataUsario = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['admin'] = $dataUsario['admin'];
        $_SESSION['id'] = $dataUsario['id'];
        header('Location: views/inicio/inicio.php');
        exit();
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
