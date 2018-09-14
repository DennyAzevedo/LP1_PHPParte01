<?php
    // se o usuário não estiver logado, vamos abrir o formulário de login
    // mas, se o usuário estiver logado, vamos mostrar uma mensagem de
    // boas vindas e mostrar também o seu nome de usuário

    // iniciar o uso de sessão
    session_start();

    $titulo = "Aula 05 - Login";

    if(isset($_GET['ac']) && $_GET['ac'] == "logout" && isset($_SESSION['usuario']))
    {
        setcookie("usuarioLogado","",time()-3600);
        unset($_SESSION['usuario']);
        unset($_SESSION['usuarioLogado']);
    }

    if(isset($_POST['usuario']) && isset($_POST['senha']))
    {
        if(($_POST['usuario'] == "admin") && ($_POST['senha'] == "123"))
        {
            if(isset($_POST['lembrar']) && $_POST['lembrar'] == "1")
            {
                setcookie("usuarioLogado",$_POST['usuario'],time()+60*60*24*30);
            }
            $_SESSION['usuario'] = $_POST['usuario'];
            //escreve em nosso arquivo a data, o horário e o IP de quem logou
            fwrite($log, date("d/m/Y H:i:s")." ".$_SERVER['REMOTE_ADDR']." ".$_POST['usuario']."\r\n");
        }
    }

    if(isset($_SESSION['usuario']) || isset($_COOKIE['usuarioLogado']))
    {
        // o usuário está logado
        if(isset($_COOKIE['usuarioLogado']))
        {
            $_SESSION['usuario'] = $_COOKIE['usuarioLogado'];
        }
        require_once("tmpl_administrativo.php");
    }
    else
    {
        // o usuário não está logado
        require_once("tmpl_formularioLogin.php");
    }

    fclose($log);