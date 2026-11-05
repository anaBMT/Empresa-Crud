<?php
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $cargo = $_POST ['cargo'];
    $salario = $_POST ['salario'];
    $admissao = $_POST ['admissao'];
    //criar a instrução sql
    $sql = "insert into funcionario (nome, email, cargo, salario, data_admissao) 
        values ('$nome', '$email', '$cargo', '$salario', '$admissao')";
    require_once("../conexao.php");  //chama o arquivo de conexao
    $conexao = mysqli_query($conexao, $sql); //executa o sql
    if($conexao == true){
        header ("location: listar.php"); //redireciona
    }
?>