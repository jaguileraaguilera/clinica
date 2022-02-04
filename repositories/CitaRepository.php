<?php

namespace repositories;
use lib\BaseDatos;
use models\Cita;

class CitaRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM citas;");
        return $this -> extraer_todos();
    }

    public function extraer_todos() {
        $citas = array();
        $citasData = $this -> conexion -> extraer_todos();

        foreach ($citasData as $citaData) {
            array_push($citas, Cita::fromArray($citaData));
        }

        return $citas;
    }

    public function borrar($id_cita) {
        $this -> conexion -> consulta(
            "DELETE FROM citas WHERE id='{$id_cita}';"
        );
    }
}
