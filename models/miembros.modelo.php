<?php
require_once "admin/db.php";

class usuario
{
  private $pdo;

  private $usu_id;
  private $usu_nombre;
  private $usu_apellido;
  private $usu_direccion;
  private $usu_telefono;
  private $usu_correo;
  private $usu_fecha;
  private $usu_cantidad;

  public function __construct()
  {
    $this->pdo = DataBase::Conectar();
  }
  /* MÉTODOS GETTERS Y SETTERS */

  //* id

  public function getPro_id(): ?int
  {
    return $this->usu_id;
  }
  public function setPro_id(int $id)
  {
    $this->usu_id = $id;
  }

  //* nombre

  public function getPro_nombre(): ?string
  {
    return $this->usu_nombre;
  }
  public function setPro_nombre(string $nombre)
  {
    $this->usu_nombre = $nombre;
  }

  //* apellido

  public function getPro_apellido(): ?string
  {
    return $this->usu_apellido;
  }
  public function setPro_apellido(string $apellido)
  {
    $this->usu_apellido = $apellido;
  }

  //* direccion

  public function getPro_direccion(): ?string
  {
    return $this->usu_direccion;
  }
  public function setPro_direccion(string $direccion)
  {
    $this->usu_direccion = $direccion;
  }

  //* telefono

  public function getPro_telefono(): ?int
  {
    return $this->usu_telefono;
  }
  public function setPro_telefono(int $telefono)
  {
    $this->usu_telefono = $telefono;
  }

  //* correo

  public function getPro_correo(): ?string
  {
    return $this->usu_correo;
  }
  public function setPro_correo(string $correo)
  {
    $this->usu_correo = $correo;
  }

  //* cantidad

  public function getPro_cantidad(): ?string
  {
    return $this->usu_cantidad;
  }
  public function setPro_cantidad($cantidad)
  {
    $this->usu_cantidad = $cantidad;
  }


  //* fecha

  public function getPro_fecha(): ?string
  {
    return $this->usu_fecha;
  }
  public function setPro_fecha(string $fecha)
  {
    $this->usu_fecha = $fecha;
  }

  /***************************************************************/
  /******************* MÉTODOS**********/

  /** MÉTODO CANTIDAD */
  public function Cantidad()
  {
    try {
      $sql = "SELECT SUM(cantidad) as Cantidad FROM usuario;";

      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();

      return $consulta->fetch(PDO::FETCH_OBJ);
      //

    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  /** MÉTODO LISTAR USUARIOS */

  public function Listar()
  {
    try {
      $sql = "SELECT * FROM usuario";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA INSERTAR USUARIOS */
  public function Insertar(usuario $p)
  {
    try {
      $sql = "INSERT INTO libros (nombre, apellido, direccion, telefono, correo, fecha) VALUES (:nombre, :apellido, :direccion, :telefono, :correo, :fecha)";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":nombre", $p->getPro_nombre());
      $consulta->bindParam(":apellido", $p->getPro_apellido());
      $consulta->bindParam(":direccion", $p->getPro_direccion());
      $consulta->bindParam(":telefono", $p->getPro_telefono());
      $consulta->bindParam(":correo", $p->getPro_correo());
      $consulta->bindParam(":fecha", $p->getPro_fecha());
      $consulta->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA OBTENER EL USUARIO SELECCIONADO */
  public function Obtener($id)
  {
    try {
      $sql = "SELECT * FROM usuario WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
      $res = $consulta->fetch(PDO::FETCH_OBJ);

      $p = new usuario();
      $p->setPro_id($res->id);
      $p->setPro_nombre($res->nombre);
      $p->setPro_apellido($res->apellido);
      $p->setPro_direccion($res->direccion);
      $p->setPro_telefono($res->telefono);
      $p->setPro_correo($res->correo);
      $p->setPro_fecha($res->fecha);
      return $p;
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }

  /* MÉTODO PARA ACTUALIZAR USUARIOS */
  public function Actualizar(usuario $p)
  {
    try {
      $sql = "UPDATE usuario SET nombre = :nombre,apellido = :apellido, direccion = :direccion, telefono = :telefono, correo = :correo, fecha = :fecha WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $p->getPro_id());
      $consulta->bindParam(":nombre", $p->getPro_nombre());
      $consulta->bindParam(":apellido", $p->getPro_apellido());
      $consulta->bindParam(":direccion", $p->getPro_direccion());
      $consulta->bindParam(":telefono", $p->getPro_telefono());
      $consulta->bindParam(":correo", $p->getPro_correo());
      $consulta->bindParam(":fecha", $p->getPro_fecha());
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }


  /* MÉTODO PARA ELIMINAR USUARIOS */
  public function Eliminar($id)
  {
    try {
      $sql = "DELETE FROM usuario WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }
}
