<?php 
  $conexao = new mysqli('localhost','root','12345','sga');

  $sql = "SELECT * FROM `funcionarios` WHERE `id` = {$_GET['id']}";

  $resultado =  $conexao->query($sql);

  $funcionarios = $resultado-> fetch_object();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
</head>
<body>
<h3>Editar Funcionário</h3>
    <form action="funcoes/atualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $funcionarios->id?>">
        
        <label for="nome">Nome</label>
        <br>
        <input value="<?= $funcionarios->nome ?>" type="text" id="nome" name="nome">
        <br>
        <br>
        <label for="genero">Gênero</label>
        <br>
        <input value="<?= $funcionarios->genero ?>" type="text" id="genero" name="genero">
        <br>
        <br>
        <label  for="date">nascimento</label>
        <br>
        <input value="<?= $funcionarios->dtNascimento ?>" type="date" id="dtNascimento" name="dtNascimento">
        <br>
        <br>
        <label for="cpf">cpf</label>
        <br>
        <input value="<?= $funcionarios->cpf ?>" type="text" id="cpf" name="cpf">
        <br>
        <br>
        <label for="cns">cns</label>
        <br>
        <input value="<?= $funcionarios->cns ?>" type="text" id="cns" name="cns">
        <br>
        <br>
        <label for="celular">celular</label>
        <br>
        <input value="<?= $funcionarios->celular ?>" type="text" id="celular" name="celular">
        <br>
        <br>
        <label for="email">email</label>
        <br>
        <input value="<?= $funcionarios->email?>" type="text" id="email" name="email">
        <br>
        <br>
        <label for="status">status</label>
        <br>
        <input value="<?= $funcionarios->status ?>" type="text" id="status" name="status">
        <br>
        <br>
        <label for="cadastro">cadastro</label>
        <br>
        <input value="<?= $funcionarios->dtCadastro ?>" type="datetime" id="dtCadastro" name="dtCadastro">
        <br>
        <br>
        <label for="conselho">conselho</label>
        <br>
        <input value="<?= $funcionarios->numConselho ?>" type="text" id="numConselho" name="numConselho">
        <br>    
        <br>
        <label for="idcargo">Cargo</label>
        <br>
        <select name="cargos_id" id="cargo">
      <option value="" default>Selecione um cargo</option>
      <?php while($cargo = $resultado->fetch_object()){?>
      
      <option value="<?= $cargo->id?>"><?= $cargo->nomeCargo ?></option>
      <?php } ?>
    </select>
        <br>
        <br>
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>