<?php
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "UPDATE `funcionarios` SET `nome` = '{$_POST['nome']}', `genero` = '{$_POST['genero']}',`dtNascimento` = '{$_POST['dtNascimento']}', 
`cpf` = '{$_POST['cpf']}', `cns` = '{$_POST['cns']}', `celular` = '{$_POST['celular']}', `email` = '{$_POST['email']}', 
`status` = '{$_POST['status']}', `dtCadastro` = '{$_POST['dtCadastro']}', `numConselho` = '{$_POST['numConselho']}', 
`cargos_id` = '{$_POST['idcargo']}' WHERE `id` = '{$_POST['id']}'";

echo($sql);

// $conexao->query($sql);

//   echo("Cargo atualizado com sucesso!");

// $conexao -> close();

// header("Refresh:3;/sga/funcionarios/index.php");
?>