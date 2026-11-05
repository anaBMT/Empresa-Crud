<?php
    //este arquivo conecta com o banco de dados MYSQL
    //definir as variaveis
    $servidor ="localhost";
    $usuario = "root";
    $senha = "";
    $bd = "empresa";

    //chamar o comando para conectar
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
    if($conexao) {
        echo "Conexão realizada com sucesso!";
    } else {
        echo mysqli_error($conexao);
    }
?>