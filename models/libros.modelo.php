<?php
require_once "admin/db.php";

class Libro
{
  private $pdo;

  private $lib_id;
  private $lib_titulo;
  private $lib_autor;
  private $lib_genero;
  private $lib_anio;
  private $lib_isbn;
  private $lib_cantidad;

  public function __construct()
  {
    $this->pdo = DataBase::Conectar();
  }
  /* MÉTODOS GETTERS Y SETTERS */

  //* id

  public function getPro_id(): ?int
  {
    return $this->lib_id;
  }
  public function setPro_id(int $id)
  {
    $this->lib_id = $id;
  }

  //* titulo

  public function getPro_titulo(): ?string
  {
    return $this->lib_titulo;
  }
  public function setPro_titulo(string $titulo)
  {
    $this->lib_titulo = $titulo;
  }

  //* autor

  public function getPro_autor(): ?string
  {
    return $this->lib_autor;
  }
  public function setPro_autor(string $autor)
  {
    $this->lib_autor = $autor;
  }

  //* genero

  public function getPro_genero(): ?string
  {
    return $this->lib_genero;
  }
  public function setPro_genero(string $genero)
  {
    $this->lib_genero = $genero;
  }

  //* año

  public function getPro_anio(): ?int
  {
    return $this->lib_anio;
  }
  public function setPro_anio(int $anio)
  {
    $this->lib_anio = $anio;
  }

  //* isbn

  public function getPro_isbn(): ?int
  {
    return $this->lib_isbn;
  }
  public function setPro_isbn(int $isbn)
  {
    $this->lib_isbn = $isbn;
  }

  //* cantidad

  public function getPro_cantidad(): ?int
  {
    return $this->lib_cantidad;
  }
  public function setPro_cantidad($cantidad)
  {
    $this->lib_cantidad = $cantidad;
  }


  /***************************************************************/
  /********************AHORA VAMOS A CREAR OTROS MÉTODOS**********/

  /** MÉTODO CANTIDAD */
  public function Cantidad()
  {
    try {
      $sql = "SELECT SUM(cantidad) as Cantidad FROM libros;";

      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();

      return $consulta->fetch(PDO::FETCH_OBJ);
      //

    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  /** MÉTODO LISTAR LIBROS */

  public function Listar()
  {
    try {
      $sql = "SELECT * FROM libros";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA INSERTAR LIBROS */
  public function Insertar(libro $p)
  {
    try {
      $sql = "INSERT INTO libros (titulo,autor, genero, anio, isbn, cantidad) VALUES (:titulo, :autor, :genero, :anio, :isbn, :cantidad)";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":titulo", $p->getPro_titulo());
      $consulta->bindParam(":autor", $p->getPro_autor());
      $consulta->bindParam(":genero", $p->getPro_genero());
      $consulta->bindParam(":anio", $p->getPro_anio());
      $consulta->bindParam(":isbn", $p->getPro_isbn());
      $consulta->bindParam(":cantidad", $p->getPro_cantidad());
      $consulta->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA OBTENER PRODUCTO SELECCIONADO */
  public function Obtener($id)
  {
    try {
      $sql = "SELECT * FROM libros WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
      $res = $consulta->fetch(PDO::FETCH_OBJ);

      $p = new Libro();
      $p->setPro_id($res->id);
      $p->setPro_titulo($res->titulo);
      $p->setPro_autor($res->autor);
      $p->setPro_genero($res->genero);
      $p->setPro_anio($res->anio);
      $p->setPro_isbn($res->isbn);
      $p->setPro_cantidad($res->cantidad);
      return $p;
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }

  /* MÉTODO PARA ACTUALIZAR PRODUCTO */
  public function Actualizar(Libro $p)
  {
    try {
      $sql = "UPDATE libros SET titulo = :titulo,autor = :autor, genero = :genero, anio = :anio, isbn = :isbn, cantidad = :cantidad WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $p->getPro_id());
      $consulta->bindParam(":titulo", $p->getPro_titulo());
      $consulta->bindParam(":autor", $p->getPro_autor());
      $consulta->bindParam(":genero", $p->getPro_genero());
      $consulta->bindParam(":anio", $p->getPro_anio());
      $consulta->bindParam(":isbn", $p->getPro_isbn());
      $consulta->bindParam(":cantidad", $p->getPro_cantidad());
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }


  /* MÉTODO PARA ELIMINAR PRODUCTO */
  public function Eliminar($id)
  {
    try {
      $sql = "DELETE FROM libros WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }
}
