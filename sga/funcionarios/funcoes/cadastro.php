<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql ="INSERT INTO sga.`funcionarios` (`nome`, `genero`, `dtNascimento`, `cpf`, `cns`, `celular`, `email`, `status`, `dtCadastro`, `numConselho`, `cargos_id` ) VALUES ('{$_POST['nome']}', '{$_POST['genero']}', '{$_POST['dtNascimento']}', '{$_POST['cpf']}', '{$_POST['cns']}', '{$_POST['celular']}', '{$_POST['email']}', '{$_POST['status']}', '{$_POST['dtCadastro']}', '{$_POST['numConselho']}', '{$_POST['cargos_id']}')";

 $conexao -> query($sql);

 echo ("Funcionario
  adicionado com sucesso!");

 $conexao -> close();

 header("Refresh:3;/sga/funcionarios/index.php");
?>