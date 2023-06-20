<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "INSERT INTO `cargos` (`nomeCargo`) VALUES ('{$_POST['nome']}')";

$conexao -> query($sql);

echo ("Cargo adicionado com sucesso!");

$conexao -> close();

header("Refresh:3;/sga/cargos/index.php");
?>