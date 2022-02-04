<?php
namespace services;
use repositories\UsuarioRepository;

class UsuarioService {
    private UsuarioRepository $repository;

    function __construct() {
        $this -> repository = new UsuarioRepository();
    }

    public function inicia_sesion($correo, $password) {
        return $this -> repository -> inicia_sesion($correo, $password);
    }

    public function guardar(array $usuario) : void {
        $this -> repository -> guardar($usuario);
    }

    public function listar() {
        return $this -> repository -> listar();
    }
}