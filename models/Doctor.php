<?php 
namespace models;

class Doctor {
    function __construct(
        private string $dni,
        private string $nombre,
        private string $apellidos,
        private string $telefono,
        private string $especialidad
    ){}

    public function getDni(): string {
        return $this->dni;
    }

    public function setDni(string $dni): self {
        $this->dni = $dni;
        return $this;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getTelefono(): string {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self {
        $this->telefono = $telefono;
        return $this;
    }

    public function getEspecialidad(): string {
        return $this->especialidad;
    }

    public function setEspecialidad(string $especialidad): self {
        $this->especialidad = $especialidad;
        return $this;
    }

    public static function fromArray(array $data): Doctor {
        return new Doctor(
            $data['dni'],
            $data['nombre'],
            $data['apellidos'],
            $data['telefono'],
            $data['especialidad']
        );
    }
}
