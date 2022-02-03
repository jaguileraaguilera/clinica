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
                '{$doctor['especialidad']}');"
            );
    }

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM doctores;");
        return $this -> extraer_todos();
    }

    public function extraer_todos() {
        $doctores = array();
        $doctoresData = $this -> conexion -> extraer_todos();

        foreach ($doctoresData as $doctorData) {
            array_push($doctores, Doctor::fromArray($doctorData));
        }

        return $doctores;
    }
}