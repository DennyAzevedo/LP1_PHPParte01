<?php
    $array = array();

    $titulo = "Aula 04 - Manipulando String";

    $var1 = "ESTA é alguma frase";
    $var2 = "Esta é outra frase";
    $var3 = "ABCDEfghi";
    
    //Tornando tudo minusculo
    $array[] = "VAR1 em minusculo = ".strtolower($var1);

    //Tornando tudo maiusculo
    $array[] = "VAR2 em maiusculo = ".strtoupper($var2);

    //Exibir a posição de um elemento na string
    $array[] = "Posicao do elemento 'e' na variável VAR2 = ".strpos($var2,"e");

    //utilizando str_split
    $str_split[] = str_split($var3);

    //utilizando explode
    $explode = explode(" ", $var2);

    //utilizando implode
    $implode = implode("_", $explode);

    //utilizando replace
    $array[] = str_replace("Esta", "Aquela", $var2);