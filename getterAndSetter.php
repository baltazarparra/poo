<?php
    class Carro {
        private $modelo;
        private $ano;

        public function getModelo() {
            return $this->modelo;
        }

        public function getAno() {
            return $this->ano;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function dados() {
            return array(
                "modelo"=>$this->getModelo(),
                "ano"=>$this->getAno()
            );
        }
    }
?>