<?php 
namespace models;

class Cita {
    function __construct(
        private string $id,
        private string $paciente_dni,
        private string $doctor_dni,
        private string $fecha,
        private string $hora
    ){}

    public function getId() {
        return $this->id;
    }

    public function setId($id): self {
        $this->id = $id;
        return $this;
    }

    public function getPacienteDni() {
        return $this->paciente_dni;
    }

    public function setPacienteDni($paciente_dni): self {
        $this->paciente_dni = $paciente_dni;
        return $this;
    }

    public function getDoctorDni() {
        return $this->doctor_dni;
    }

    public function setDoctorDni($doctor_dni): self {
        $this->doctor_dni = $doctor_dni;
        return $this;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha): self {
        $this->fecha = $fecha;
        return $this;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora): self {
        $this->hora = $hora;
        return $this;
    }

    public static function fromArray(array $data): Cita {
        return new Cita(
            $data['id'],
            $data['paciente_dni'],
            $data['doctor_dni'],
            $data['fecha'],
            $data['hora']
        );
    }
}
