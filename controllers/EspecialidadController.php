<?php
namespace controllers;
use services\EspecialidadService;

class EspecialidadController {
  private EspecialidadService $service;

  function __construct() {
    $this -> service = new EspecialidadService();
  }

  public function listar() {
    $especialidades = $this -> service -> listar();
    require_once 'views/volver_inicio.php';
    require_once 'views/especialidades/listar.php';
    return $especialidades;
  }
}
