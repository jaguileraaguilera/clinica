<?php 
namespace models;

class Especialidad {
    function __construct(
        private string $nombre
    ){}

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    public static function fromArray(array $data): Especialidad {
        return new Especialidad(
            $data['nombre']
        );
    }
}