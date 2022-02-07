<?php
namespace controllers;
use services\EspecialidadService;

class EspecialidadController {
  private EspecialidadService $service;

  function __construct() {
    $this -> service = new EspecialidadService();
  }

  public function extraer_todas() {
    return $this -> service -> listar();
  }

  public function listar() {
    $especialidades = $this -> extraer_todas();
    require_once 'views/volver_inicio.php';
    require_once 'views/especialidades/listar.php';
    return $especialidades;
  }

  public function borrar() {
    $nombre_especialidad = $_POST['nombre'];
    $this -> service -> borrar($nombre_especialidad);

    header("Location:".base_url."/Especialidad/ver_opciones_borrado");
  }

  public function ver_opciones_borrado() {
    require_once 'views/volver_inicio.php';
    $especialidades = $this -> extraer_todas();
    require_once 'views/especialidades/borrar.php';
  }
}
