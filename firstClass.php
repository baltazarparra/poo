<?php
    class Pessoa {
        public $nome;
        public $descricao;
        public function falar() {
            return "<p>Meu nome é ".$this->nome.". ".$this->descricao."</p>";
        }
    }
?>