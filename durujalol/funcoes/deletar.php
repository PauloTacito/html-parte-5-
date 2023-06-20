<?php
    $conexao = new mysqli('localhost','root','12345','escola');

    $sql = "DELETE FROM `aluno` WHERE `id` = {$_POST['id']}";
    
    $conexao->query($sql);

    echo("Registro apagado com sucesso");

    $conexao->close();

    header("Refresh:3;/durujalol/index.php");
?>