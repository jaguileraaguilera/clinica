<?php
namespace controllers;
use services\UsuarioService;

class UsuarioController {
  private UsuarioService $service;

  function __construct() {
    $this -> service = new UsuarioService();
  }

  public function iniciar_sesion() {
    require_once 'views/usuario/iniciar_sesion.php';
  }

  public function dar_alta() {
    require_once 'views/usuario/alta_usuario.php';
  }

  public function login() {
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $usuario = $this -> service -> inicia_sesion($correo, $password);
    require_once 'views/usuario/sesion_iniciada.php';

  }

  public function registro() {
    //  si es admin : $_POST["esAdmin"]= "1" sino: -> $_POST["esAdmin"] = "0"
    $usuario = array(
      'dni' => $_POST['dni'],
      'nombre' => $_POST['nombre'],
      'apellidos' => $_POST['apellidos'],
      'correo' => $_POST['correo'],
      'password' => $_POST['password'],
      'esAdmin' => (int) $_POST['esAdmin']
    );
    $this -> service -> guardar($usuario);

    header("Location:".base_url); //Usar sesiones para mandarlo a login() y que entre con sus datos directamente
  }
}