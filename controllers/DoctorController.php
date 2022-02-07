<?php
namespace controllers;
use services\DoctorService;
use controllers\EspecialidadController;

class DoctorController {
  private DoctorService $service;

  function __construct() {
    $this -> service = new DoctorService();
  }

  // Gestión de modelos
  public function datos_doctor() {
    $dni_doctor = $_POST['dni'];
    $this -> service -> datos_doctor($dni_doctor);
  }

  public function listar() {
    $doctores = $this -> service -> listar();
    require_once 'views/volver_inicio.php';
    require_once 'views/doctor/listar.php';
    return $doctores;
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

    header("Location:".base_url."/Doctor/listar");
  }

  public function borrar() {
    $dni_doctor = $_POST['dni'];
    $this -> service -> borrar($dni_doctor);

    header("Location:".base_url."/Doctor/ver_opciones_borrado");
  }

  public function modificar() {
    $atributos = array('dni', 'nombre', 'apellidos', 'telefono', 'especialidad');
    $opciones = array();

    foreach ($atributos as $atributo) {
      if (isset($_POST[$atributo])) {
        $opciones[$atributo] = $_POST[$atributo];
      }
    }

    $this -> service -> modificar($opciones);
    header("Location:".base_url."/Doctor/listar");
  }

  // Gestión de vistas
  public function ver_opciones_borrado() {
    require_once 'views/volver_inicio.php';
    $doctores = $this -> listar();
    require_once 'views/doctor/borrar.php';
  }

  public function ver_formulario_alta() {
    require_once 'views/volver_inicio.php';
    require_once 'views/doctor/alta.php';
  }

  public function ver_opciones_modificar() {
    $doctores = $this -> listar();
    require_once 'views/volver_inicio.php';
    require_once 'views/doctor/elegir_doctor_campos_modificar.php';
  }

  public function ver_formulario_modificar() {
    $dni = $_POST['dni'];
    $opciones = array('nombre', 'apellidos', 'telefono', 'especialidad');

    foreach ($opciones as $opcion) {
      if (isset($_POST[$opcion])) {
        $opciones_procesar[] = $_POST[$opcion];
      }
    }

    if (in_array('especialidad', $opciones_procesar)) {
      $especialidad = new EspecialidadController(); 
      $especialidades = $especialidad-> extraer_todas();
    }

    // var_dump($opciones_procesar);
    require_once 'views/volver_inicio.php';
    require_once 'views/doctor/modificar.php';
  }
}
