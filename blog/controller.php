<?php
    $titulo = "Aula 04 - Aprendendo PHP Básico";
    $nome = "Denny Azevedo";
    $idade = 54;
    $dtNasc = "12/01/1964";

    $mensagem = "";
    if($idade < 20)
    {
        $mensagem = "Jovem";
    }
    else
    {
        $mensagem = "Você está ficando idoso!";
    }

    $retorno = quadrado(4);
    $funcao = "O quadrado de 4 é ".$retorno;

    $juntou = concatenar("Denny", "Azevedo");