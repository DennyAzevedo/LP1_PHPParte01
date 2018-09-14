<?php
    $titulo = "Manutenção de Usuários";
    @$conexao = mysqli_connect($db_host, $db_user, $db_pass,$db_name);

    if(mysqli_connect_errno($conexao))
    {
        $resultado = "A conexão falhou, erro reportado: ".mysqli_connect_error();
        exit();
    }

    require("mdl_usuario.php");

    if(isset($_GET['p']))
    {
        $passo = $_GET['p'];
    }
    else
    {
        $passo = null;
    }

    switch($passo)
    {
        case "cadastrar" :
            break;
        case "alterar" :
            break;
        case "excluir" :
            $retornoExc = excluirUsuario($conexao);
            $dados = listarDados($conexao);
            require("view_lista.php");
            break;
        default:
            $dados = listarDados($conexao);
            require("view_lista.php");
            break;
    }

    @mysqli_close($conexao);

    function listarDados($conexao)
    {
        $resultado = usuario_listar($conexao);
        $data = array();
        while($row = mysqli_fetch_array($resultado))
        {
            $data[] = array("id" => $row['id'], "nome" => utf8_encode($row['nome']), "idade" => ($row['idade'] == "") ? "--" : $row['idade']);
        }
        return $data;
    }

    function excluirUsuario($conexao)
    {
        $id_usuario = (isset($_GET["codigo"])) ? $_GET["codigo"] : -1;
        $resultado = usuario_excluir($conexao, $id_usuario);
        if($resultado)
        {
            return "Exclusão efetuada com sucesso!";
        }
        else
        {
            return "";
        }
    
    }