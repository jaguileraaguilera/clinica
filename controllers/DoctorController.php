<?php
namespace controllers;
use models\Doctor;

class DoctorController {
  private Doctor $doctor;

  function __construct() {
    $this -> doctor = new Doctor();
  }

  public function listar(): void {
    $doctores = [];
    $datos_todos_doctores = $this -> doctor -> extraer_todos();
    foreach ($datos_todos_doctores as $registro) {
      $doctores[] = Doctor::fromArray($registro);
    }
    require_once 'views/doctor/listar.php';
  }

}