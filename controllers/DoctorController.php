<?php
namespace controllers;
use services\DoctorService;

class DoctorController {
  private DoctorService $service;

  function __construct() {
    $this -> service = new DoctorService();
  }

  // Gestión de modelos
  public function listar() {
    $doctores = $this -> service -> listar();
    require_once 'views/doctor/listar.php';
  }

  public function registrar() {
    $doctor = array(
      'dni' => $_POST['dni'],
      'nombre' => $_POST['nombre'],
      'apellidos' => $_POST['apellidos'],
      'telefono' => $_POST['telefono'],
      'especialidad' => $_POST['especialidad']
    );
    $this -> service -> guardar($doctor);

    header("Location:".base_url."/Usuario/login");
  }

  public function borrar() {
    $dni_doctor = $_POST['dni'];
    $this -> service -> borrar($dni_doctor);

    header("Location:".base_url."/Doctor/ver_opciones_borrado");
  }

  // Gestión de vistas
  public function ver_opciones_borrado() {
    require_once 'views/doctor/borrar.php';
    $this -> listar();
  }

  public function ver_formulario_alta() {
    require_once 'views/doctor/alta_doctor.php';
  }

}