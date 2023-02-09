<?php

    class Usuario {
        private $nome;
        private $email;
        private $senha;

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
            return $this;
        }
        public function __get($atributo) {
            return $this->$atributo;
        }
    }

?>