<?php 
    $conexao = new mysqli('localhost', 'root','12345','escola');

    $sql = "INSERT INTO `aluno` (`nome`, `matricula`, `cpf`) VALUES ('{$_POST['nome']}', '{$_POST['matricula']}', '{$_POST['cpf']}')";

    $conexao->query($sql);

    echo("Cadastro realizado com sucesso.");

    $conexao->close();

    header("Refresh:3;/durujalol/index.php");
?>