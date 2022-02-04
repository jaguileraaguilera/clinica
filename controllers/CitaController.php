<?php
namespace controllers;
use services\CitaService;

class CitaController {
  private CitaService $service;

  function __construct() {
    $this -> service = new CitaService();
  }
}