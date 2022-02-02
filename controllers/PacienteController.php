<?php
    namespace Controllers;
    use Models\Paciente;

    class PacienteController  {
        private Paciente $patient;

        function __construct() {
            $this -> patient = new Paciente();
        }

        public function mostrarTodos() {
            $todos_mis_pacientes = $this -> patient -> extraer_todos();
            require_once 'views/paciente/mostrar_todos.php';
        }

        public function index() {
            echo "Esto es provisional";
        }
    }