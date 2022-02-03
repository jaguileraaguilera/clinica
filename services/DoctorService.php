<?php
namespace services;
use repositories\DoctorRepository;

class DoctorService {
    private DoctorRepository $repository;

    function __construct() {
        $this -> repository = new DoctorRepository();
    }

    public function guardar(array $doctor) : void {
        $this -> repository -> guardar($doctor);
    }

    public function listar() {
        return $this -> repository -> listar();
    }

    public function borrar(string $dni_doctor): void {
        $this -> repository -> borrar($dni_doctor);
    }
}