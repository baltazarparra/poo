<?php
    class endereco {
        private $logradouro;
        private $cidade;

        public function __construct($a, $b) {
            $this->logradouro = $a;
            $this->cidade = $b;
        }

        public function __toString() {
            return $this->logradouro.", ".$this->cidade;
        }
    }
?>