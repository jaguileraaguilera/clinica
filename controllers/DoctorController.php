<?php
namespace controllers;
use services\DoctorService;

class DoctorController {
  private DoctorService $service;

  function __construct() {
    $this -> service = new DoctorService();
  }

  public function dar_alta() {
    require_once 'views/doctor/alta_doctor.php';
  }

  public function listar() {
    $doctores = $this -> service -> listar();
    require_once 'views/doctor/listar.php';
  }

  public function registro() {
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
}