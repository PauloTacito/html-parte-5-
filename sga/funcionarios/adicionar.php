<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "SELECT * FROM sga.cargos";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionários</title>
</head>
<body>
  <h3>Adicionar Funcionários</h3>  
<form action="funcoes/cadastro.php" method="post">
    
    <label for="nome">Nome:</label>
    <br>
    <input type="text" id="nome" name="nome">
    <br>
    <br>
    <label for="genero">Gênero</label>
    <br>
    <input type="text" id="genero" name="genero">
    <br>
    <br>
    <label for="date">Nascimento</label>
    <br>
    <input type="date" id="dtNascimento" name="dtNascimento">
    <br>
    <br>
    <label for="cpf">Cpf</label>
    <br>
    <input type="text" id="cpf" name="cpf">
    <br>
    <br>
    <label for="cns">Cns</label>
    <br>
    <input type="text" id="cns" name="cns">
    <br>
    <br>
    <label for="celular">Celular</label>
    <br>
    <input type="text" id="celular" name="celular">
    <br>
    <br>
    <label for="email">Email</label>
    <br>
    <input type="text" id="email" name="email">
    <br>
    <br>
    <label for="status">Status</label>
    <br>
    <input type="text" id="status" name="status">
    <br>
    <br>
    <label for="cadastro">Cadastro</label>
    <br>
    <input type="date" id="dtCadastro" name="dtCadastro">
    <br>
    <br>
    <label for="conselho">Conselho</label>
    <br>
    <input type="text" id="numConselho" name="numConselho">
    <br>
    <br>
    <label for="cargo">Cargo:</label>
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
    <br>
    <a href="index.php">Voltar</a>
</form>
</body>
</html>