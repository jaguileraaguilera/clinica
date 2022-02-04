<?php

namespace repositories;
use lib\BaseDatos;
use models\Especialidad;

class EspecialidadRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }

    public function listar() {
        $this -> conexion -> consulta("SELECT * FROM especialidades;");
        return $this -> extraer_todos();
    }

    public function extraer_todos() {
        $especialidades = array();
        $especialidadesData = $this -> conexion -> extraer_todos();

        foreach ($especialidadesData as $especialidadData) {
            array_push($especialidades, Especialidad::fromArray($especialidadData));
        }

        return $especialidades;
    }
}
