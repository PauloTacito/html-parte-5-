<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "UPDATE `cargos` SET `nomeCargo` = '{$_POST['nome']}' WHERE `id` = '{$_POST['id']}'";

$conexao->query($sql);

  echo("Cargo atualizado com sucesso!");

$conexao -> close();

header("Refresh:3;/sga/cargos/index.php");
?>