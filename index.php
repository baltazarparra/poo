<?php
    require_once("config.php");
    require_once("firstClass.php");
    require_once("getterAndSetter.php");

    $levi = new Pessoa();
    $levi->nome = "<b>Leviathan</b>";
    $levi->descricao = "Representante do quinto pecado, a Inveja, também sendo tratado como um dos sete príncipes infernais.";
    echo $levi->falar();

    $golzin = new Carro();
    $golzin->setModelo("Gol");
    $golzin->setAno("1996");
    print_r($golzin->dados())
?>