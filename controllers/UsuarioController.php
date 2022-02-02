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
    session_start();
    if (!isset($_SESSION['correo']) || (!isset($_SESSION['password']))) {
      $_SESSION['correo'] = $_POST["correo"];
      $_SESSION['password'] = $_POST["password"];
    } ;

    $usuario = $this -> service -> inicia_sesion($_SESSION['correo'], $_SESSION['password']);
    require_once 'views/usuario/sesion_iniciada.php';
  }

  public function logout() {
    session_start();
    $_SESSION = array();
    session_destroy();

    header("Location:".base_url);
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

    header("Location:".base_url."/Usuario/login");
  }
}