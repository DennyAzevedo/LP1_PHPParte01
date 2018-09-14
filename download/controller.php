<?php
    $lista = array("12345" => "WEB_2018_2.pdf");

    $titulo = "Aula 06 - Download de arquivo";

    $idarquivo = $_GET['id'];

    header("Content-type:application/pdf");
    header("Content-Disposition:attachment;filename='web2018.pdf'");

    readfile("arquivos/".$lista[$idarquivo]);