<?php

    function usuario_listar($conexao)
    {
        $sql = "SELECT id, nome, idade FROM usuario ORDER BY nome";
        $resultado = mysqli_query($conexao, $sql);

        return $resultado;
    }

    function usuario_excluir($conexao, $id_usuario)
    {
        $sql = sprintf("DELETE FROM usuario WHERE id = %s", $id_usuario);
        $resultado = mysqli_query($conexao, $sql);

        return $resultado;
    }