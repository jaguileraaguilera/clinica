<?php

namespace repositories;
use lib\BaseDatos;
use models\Doctor;

class DoctorRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }

    public function guardar($doctor) {
        $this -> conexion -> consulta(
            "INSERT INTO doctores VALUES(
                '{$doctor['dni']}', 
                '{$doctor['nombre']}', 
                '{$doctor['apellidos']}',
                '{$doctor['telefono']}',
                '{$doctor['especialidad']}');
            "
        );
    }

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM doctores;");
        return $this -> extraer_todos();
    }

    public function borrar($dni_doctor) {
        // Primero borramos todas sus citas, para que no chille la BD
        $this -> conexion -> consulta(
            "DELETE FROM citas WHERE doctor_dni='{$dni_doctor}';"
        );
        $this -> conexion -> consulta(
            "DELETE FROM doctores WHERE dni='{$dni_doctor}';"
        );
    }

    public function modificar($opciones) {
        $dni = $opciones['dni'];

        for ($i = 1; $i < count($opciones); $i++) {
            foreach ($opciones as $campo => $valor) {
                if ($campo != 'dni') {
                    $this -> conexion -> consulta(
                        "UPDATE doctores 
                        SET {$campo}='{$valor}' 
                        WHERE dni='{$dni}';"
                    );
                }
            }
        }
    }

    public function datos_doctor($dni_doctor) {
        $this -> conexion -> consulta(
            "SELECT * FROM doctores WHERE dni='{$dni_doctor}';"
        );

        return $this -> extraer_registro();
    }

    public function extraer_todos() {
        $doctores = array();
        $doctoresData = $this -> conexion -> extraer_todos();

        foreach ($doctoresData as $doctorData) {
            array_push($doctores, Doctor::fromArray($doctorData));
        }

        return $doctores;
    }

    private function extraer_registro(): ?Doctor {
        return ($doctor = $this -> conexion -> extraer_registro()) ?
            Doctor::fromArray($doctor) : null;
    }
}