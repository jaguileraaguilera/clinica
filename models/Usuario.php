<?php
namespace models;

class Usuario {
    function __construct(
        private string $dni,
        private string $nombre,
        private string $apellidos,
        private string $correo,
        private string $password,
        private bool $esAdmin
    )
    {}
    
    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni): self {
        $this->dni = $dni;
        return $this;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): self {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getCorreo() {
        return $this->correo;
    }
 
    public function setCorreo($correo): self {
        $this->correo = $correo;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password): self {
        $this->password = $password;
        return $this;
    }

    public function getEsAdmin() {
        return $this->esAdmin;
    }

    public function setEsAdmin($esAdmin): self {
        $this->esAdmin = $esAdmin;
        return $this;
    }

    public static function fromArray(array $data) :Usuario {
        /**Permite hacer la correspondencia o mapeo de cada array 
         * de un registro obtenido de la consulta de la base de datos
         * a un objeto Usuario */

        return new Usuario (
            $data['dni'],
            $data['nombre'],
            $data['apellidos'],
            $data['correo'],
            $data['password'],
            $data['esAdmin']
        );
    }
}
