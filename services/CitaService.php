<?php
namespace services;
use repositories\CitaRepository;

class CitaService {
    private CitaRepository $repository;

    function __construct() {
        $this -> repository = new CitaRepository();
    }
}