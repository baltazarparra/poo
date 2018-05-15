<?php
    header('Content-Type: text/html; charset=utf-8');
    setlocale(LC_ALL, NULL);
    setlocale(LC_ALL, 'pt_BR.utf-8');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    spl_autoload_register(function($nameClass) {
        $dirClass = "class";
        $filename = str_replace ("\\", "/", "class" . DIRECTORY_SEPARATOR . $nameClass . ".php"); 
        if (file_exists($filename)) {
            require_once($filename);
        }
    })
?>