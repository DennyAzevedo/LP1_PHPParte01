<?php
    //Verificar se o arquivo log.txt já existe
    //file_exists("log.txt)

    //define uma constante para o nome do nosso arquivo log.
    define("ARQUIVO_LOG","log.txt");

    $log = @fopen(ARQUIVO_LOG,"x");

    if($log == false)
    {
        $log = fopen(ARQUIVO_LOG,"a");
    }
    
    require_once("controller.php");