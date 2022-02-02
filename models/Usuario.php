<?php
namespace models;

class Usuario {
    function __construct(
        private string $correo,
        private string $password
    )
    {}

    public function getCorreo() {
        return $this->correo;
    }
 
    public function setCorreo($correo): self {
        $this->correo = $correo;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password): self {
        $this->password = $password;
        return $this;
    }

    public static function fromArray(array $data) :Usuario {
        /**Permite hacer la correspondencia o mapeo de cada array 
         * de un registro obtenido de la consulta de la base de datos
         * a un objeto Usuario */

        return new Usuario (
            $data['correo'],
            $data['password']
        );
    }

        

        
        
}
