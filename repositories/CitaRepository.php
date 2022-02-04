<?php

namespace repositories;
use lib\BaseDatos;
use models\Cita;

class CitaRepository {
    private BaseDatos $conexion;

    function __construct() {
        $this -> conexion = new BaseDatos();
    }
}
