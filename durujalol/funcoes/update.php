<?php
    $conexao = new mysqli('localhost',"root",'12345','escola');

    $sql = "UPDATE `aluno` SET `nome` = '{$_POST['nome']}', `matricula` = '{$_POST['matricula']}', `cpf` = '{$_POST['cpf']}' WHERE `id` = '{$_POST['id']}'";

    $conexao->query($sql);

    echo("Edição realizada com sucesso.");

    $conexao->close();

    header("Refresh:3;/durujalol/index.php");
?>