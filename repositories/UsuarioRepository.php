<?php

namespace repositories;
use lib\BaseDatos;
use models\Usuario;

class UsuarioRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }
    private function extraer_registro(): ?Usuario {
        return ($usuario = $this -> conexion -> extraer_registro()) ? 
            Usuario::fromArray($usuario) : null;
    }

    public function inicia_sesion($correo, $password) {
        $this -> conexion -> consulta(
            "SELECT * FROM usuarios WHERE 
            correo='{$correo}' and password='{$password}';");
        return $this -> extraer_registro();
    }

    public function guardar($usuario) {
        $this -> conexion -> consulta(
            "INSERT INTO usuarios VALUES(
                '{$usuario['dni']}', 
                '{$usuario['nombre']}', 
                '{$usuario['apellidos']}',
                '{$usuario['correo']}',
                '{$usuario['password']}', 
                '{$usuario['esAdmin']}');"
        );
    }
}