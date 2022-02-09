<?php
namespace controllers;
use services\CitaService;
use controllers\UsuarioController;
use controllers\DoctorController;

class CitaController {
  private CitaService $service;

  function __construct() {
    $this -> service = new CitaService();
  }

  public function comprobar_sesion() {
    if (session_status() != 2) { //Si la sesión no está iniciada
      session_start();  
    }
  }

  public function extraer_todas() {
    return $this -> service -> listar();
  }

  public function listar() {
    $citas = $this -> extraer_todas();
    require_once 'views/volver_inicio.php';
    require_once 'views/citas/listar.php';
    return $citas;
  }

  public function borrar() {
    $id_cita = $_POST['id'];
    $this -> service -> borrar($id_cita);

    header("Location:".base_url."/Usuario/login");
  }

  public function consultar_citas() {
    $this -> comprobar_sesion();

    $usuario = new UsuarioController();
    $usuario = $usuario -> datos_usuario();
    
    $todas_citas = $this -> extraer_todas();
    $citas = array();

    
    foreach ($todas_citas as $cita) {
      if ($cita->getPacienteDni() == $usuario->getDni()) {
        $citas[] = $cita;
      }
    }

    require_once 'views/volver_inicio.php';
    require_once 'views/citas/listar.php';
    return $citas;
  }

  public function anular_citas() {
    $citas = $this -> consultar_citas();
    require_once 'views/citas/borrar.php';
  }

  public function ver_opciones_borrado() {
    require_once 'views/volver_inicio.php';
    $citas = $this -> listar();
    require_once 'views/citas/borrar.php';
  }

  public function ver_formulario_solicitud() {
    $this -> comprobar_sesion();
    $usuario = new UsuarioController();
    $doctor = new DoctorController();

    $doctores = $doctor -> extraer_todos();
    $es_administrador = $usuario -> datos_usuario() -> getEsAdmin();
    $doctor -> listar();

    if ($es_administrador) {
      $usuarios = $usuario -> extraer_todos();
    }
    else {
      $paciente = $usuario -> datos_usuario();
    }
    
    require_once 'views/volver_inicio.php';
    require_once 'views/citas/pedir.php';
  }
}
