<?php
    require_once("config.php");
    $cad = new Cadastro();
    $cad->setNome("Baltz");
    $cad->setEmail("bparra@parra.com");
    $cad->setSenha("123456789");
    echo $cad;
?>

<?php
    use Cliente\Cadastro;

    $cad2 = new Cadastro();
    $cad2->setNome("Baltz");
    $cad2->registrarVenda();
?>