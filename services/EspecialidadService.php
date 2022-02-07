<?php
namespace services;
use repositories\EspecialidadRepository;

class EspecialidadService {
    private EspecialidadRepository $repository;

    function __construct() {
        $this -> repository = new EspecialidadRepository();
    }

    public function listar() {
        return $this -> repository -> listar();
    }

    public function borrar(string $nombre_especialidad): void {
        $this -> repository -> borrar($nombre_especialidad);
    }
}
