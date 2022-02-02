<?php 
namespace models;
use lib\BaseDatos;

class Doctor {
    private BaseDatos $conexion;
    private string $dni;
    private string $nombre;
    private string $apellidos;
    private string $telefono;
    private string $especialidad;

    function __construct(){
        $this->conexion = new BaseDatos();
    }

    public function getDni(): int{
        return $this->dni;
    }

    public function setDni(int $dni): void{
        $this->dni = $dni;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getApellidos(): string{
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void{
        $this->apellidos = $apellidos;
    }
   
    public function getTelefono(): string{
        return $this->telefono;
    }

    public function setTelefono(string $telefono): void{
        $this->telefono = $telefono;
    }
       
    public function getEspecialidad(): string{
        return $this->especialidad;
    }

    public function extraer_todos(): ?array {
        $this-> conexion -> consulta("SELECT * FROM pacientes");
        return $this -> conexion -> extraer_todos();
    }

    public static function fromArray(array $data): Doctor {
        /* Este método nos permite hacer la correspondencia o mapeo de cada
         * array de un registro obtenido de la consulta de la base de datos
         * a un objeto Doctor */

        return new Doctor(
            $data['dni'],
            $data['nombre'],
            $data['apellidos'],
            $data['telefono'],
            $data['especialidad'],
        );
    }
}

