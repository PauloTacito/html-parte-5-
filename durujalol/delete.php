<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Aluno</title>
</head>
<body>
  <h3>Deseja realmente exluir esse aluno?</h3>  

  <form action="funcoes/deletar.php" method="post">
    <input type="hidden" name="id" value="<?php echo($_GET['id']); ?>">
    <a href="index.php">Não</a>
    <input type="submit" value="Sim">
  </form>
</body>
</html>