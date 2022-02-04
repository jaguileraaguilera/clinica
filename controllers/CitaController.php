<?php
namespace controllers;
use services\CitaService;

class CitaController {
  private CitaService $service;

  function __construct() {
    $this -> service = new CitaService();
  }

  public function listar() {
    $citas = $this -> service -> listar();
    require_once 'views/volver_inicio.php';
    require_once 'views/citas/listar.php';
    return $citas;
  }

  public function borrar() {
    $id_cita = $_POST['id'];
    $this -> service -> borrar($id_cita);

    header("Location:".base_url."/Citas/ver_opciones_borrado");
  }

  public function ver_opciones_borrado() {
    require_once 'views/volver_inicio.php';
    $citas = $this -> listar();
    require_once 'views/citas/borrar.php';
  }
}
