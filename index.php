<?php
    require_once("config.php");
    class Pessoa {
        public $nome;
        public $descricao;
        public function falar() {
            return "<p>Meu nome é ".$this->nome.". ".$this->descricao."</p>";
        }
    }

    $levi = new Pessoa();
    $levi->nome = "<b>Leviathan</b>";
    $levi->descricao = "Representante do quinto pecado, a Inveja, também sendo tratado como um dos sete príncipes infernais.";
    echo $levi->falar();
?>