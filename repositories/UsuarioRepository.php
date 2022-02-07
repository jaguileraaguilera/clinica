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

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM usuarios;");
        return $this -> extraer_todos();
    }

    public function borrar($dni_usuario) {
        // Primero borramos todas sus citas, para que no chille la BD
        $this -> conexion -> consulta(
            "DELETE FROM citas WHERE paciente_dni='{$dni_usuario}';"
        );
        $this -> conexion -> consulta(
            "DELETE FROM usuarios WHERE dni='{$dni_usuario}';"
        );
    }

    public function guardar($usuario) {
        $this -> conexion -> consulta(
            "INSERT INTO usuarios VALUES(
                '{$usuario['dni']}', 
                '{$usuario['nombre']}', 
                '{$usuario['apellidos']}',
                '{$usuario['correo']}',
                '{$usuario['password']}', 
                '{$usuario['esAdmin']}');
            "
        );
    }

    public function extraer_todos() {
        $usuarios = array();
        $usuariosData = $this -> conexion -> extraer_todos();

        foreach ($usuariosData as $usuarioData) {
            array_push($usuarios, Usuario::fromArray($usuarioData));
        }

        return $usuarios;
    }

    public function datos_usuario($correo_usuario) {
        $this -> conexion -> consulta(
            "SELECT * FROM usuarios WHERE correo='{$correo_usuario}';"
        );

        return $this -> extraer_registro();
    }
}