<?php
namespace services;
use repositories\CitaRepository;

class CitaService {
    private CitaRepository $repository;

    function __construct() {
        $this -> repository = new CitaRepository();
    }

    public function listar() {
        return $this -> repository -> listar();
    }

    public function borrar(string $id_cita): void {
        $this -> repository -> borrar($id_cita);
    }

}