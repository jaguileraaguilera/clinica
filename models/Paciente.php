<?php
    namespace Models;
    use Lib\BaseDatos;

    class Paciente {

        private BaseDatos $conexion;
        private string $id;
        private string $nombre;
        private string $apellidos;
        private string $correo;
        private string $password;
        
        function __construct(
           
        )
        {
            $this->conexion = new BaseDatos();
        }
        /**
         * Get the value of id
         */
        public function getId()
        {
                    return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                    $this->id = $id;

                    return $this;
        }

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                    return $this->nombre;
        }

        /**
         * Set the value of nombre
         */
        public function setNombre($nombre): self
        {
                    $this->nombre = $nombre;

                    return $this;
        }

        /**
         * Get the value of apellidos
         */
        public function getApellidos()
        {
                    return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         */
        public function setApellidos($apellidos): self
        {
                    $this->apellidos = $apellidos;

                    return $this;
        }

        /**
         * Get the value of correo
         */
        public function getCorreo()
        {
                    return $this->correo;
        }

        /**
         * Set the value of correo
         */
        public function setCorreo($correo): self
        {
                    $this->correo = $correo;

                    return $this;
        }

        /**
         * Get the value of password
         */
        public function getPassword()
        {
                    return $this->password;
        }

        /**
         * Set the value of password
         */
        public function setPassword($password): self
        {
                    $this->password = $password;

                    return $this;
        }

        // public function extraer_registro(): ?array { // sin terminar
        //     return ($pacient = $this->conexion->extraer_registro()) ? $pacient : null;
        // }

        public function extraer_todos(): ?array {
            $this-> conexion -> consulta("SELECT * FROM pacientes");
            return $this -> conexion -> extraer_todos();
        }
        
    }
