<?php

require_once "../MODELOS/miembros.modelo.php"; //!cambiar a ruta correcta 

class usuarioControlador
{
  private $modelo;

  public function __construct()
  {
    $this->modelo = new usuario();
  }

  public function Inicio()
  {
    require_once "views/encabezado.php"; //!//!cambiar a ruta correcta
    require_once "views/producto/index.php";//!cambiar a ruta correcta
    require_once "views/pie.php";//!cambiar a ruta correcta
  }

  /** CREAR USUARIO */
  public function CrearProd()
  {
    $nombre = "Registrar";
    $p = new usuario();
    if (isset($_GET['id'])) {
      $p = $this->modelo->Obtener($_GET['id']);
      $nombre = "Actualizar";
    }

    require_once "views/encabezado.php";//!cambiar a ruta correcta
    require_once "views/producto/crear.php";//!cambiar a ruta correcta
    require_once "views/pie.php";//!cambiar a ruta correcta
  }


  /** GUARDAR USUARIO */
  public function Guardar()
  {
    $p = new usuario();
    $p->setPro_id(intval($_POST['idMiembro']));
    $p->setPro_nombre($_POST['nombreM']);
    $p->setPro_apellido($_POST['apellido']);
    $p->setPro_direccion($_POST['direccion']);
    $p->setPro_telefono($_POST['telefono']);
    $p->setPro_correo($_POST['correo']);
    $p->setPro_fecha($_POST['fechaInscripcion']);

    //Si el id está vacío es porque es un nuevo usuario 
    $p->getPro_id() > 0
      ? $this->modelo->Actualizar($p)
      : $this->modelo->Insertar($p);
    header("Location: ?c=usuario");
  }

  /* BORRAR PRODUCTO */
  public function Borrar()
  {
    $this->modelo->Eliminar($_GET['idMiembro']);
    header("Location:?c=usuario");
  }
}
