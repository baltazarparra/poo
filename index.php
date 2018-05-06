<?php
    require_once("config.php");
    require_once("firstClass.php");
    require_once("getterAndSetter.php");
    require_once("staticMethod.php");
    require_once("magicMethod.php");
    require_once("interface.php");

    $levi = new Pessoa();
    $levi->nome = "<b>Leviathan</b>";
    $levi->descricao = "Representante do quinto pecado, a Inveja, também sendo tratado como um dos sete príncipes infernais.";
    echo $levi->falar();

    $golzin = new Carro();
    $golzin->setModelo("Gol");
    $golzin->setAno("1996");
    print_r($golzin->dados());
    
    echo "<hr>";

    $cpf = new Documento();
    $cpf->setNumero("21431224030");
    var_dump($cpf->getNumero());
    echo "<hr>";
    $cpf->setNumero("21431224039");
    var_dump($cpf->getNumero());
    echo "<hr>";
    //Chamando metodo estatico
    var_dump(Documento::validarCPF("21431224030"));
    echo "<hr>";
    //Chamando metodo estatico
    var_dump(Documento::validarCPF("21431224039"));

    echo "<hr>";

    //Consumindo __construct
    $meuEndereco = new Endereco("Rua dos bobos", "Cidade de papel");
    var_dump($meuEndereco);

    echo "<hr>";

    // interface
    $carro = new Gol();
    $carro->acelerar("100km");
    echo "<hr>";
    $carro->freiar("10km");
    echo "<hr>";
    $carro->trocar("4º");
    echo "<hr>";
    $carro->empurrar();
?>