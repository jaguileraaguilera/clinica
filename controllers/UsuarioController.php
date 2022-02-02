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

  public function login() {
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $usuario = $this -> service -> inicia_sesion($correo, $password);
    require_once 'views/usuario/sesion_iniciada.php';

  }

}
