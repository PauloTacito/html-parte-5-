<?php
    $conexao = new mysqli('localhost','root','12345','escola');

    $sql = "SELECT * FROM `aluno` WHERE `id` = {$_GET['id']}";

    $resultado =  $conexao->query($sql);

    $aluno = $resultado-> fetch_object();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alunos</title>
</head>
<body>
    <h3>Editar Aluno</h3>
    <form action="funcoes/update.php" method="post">
        <input type="hidden" name="id" value="<?= $aluno->id?>">
        <label for="mat">Matrícula:</label>
        <br>
        <input value="<?php echo($aluno->matricula); ?>" type="number" id="mat" name="matricula">
        <br>
        <label for="nome">Nome:</label>
        <br>
        <input value="<?= $aluno->nome ?>" type="text" id="nome" name="nome">
        <br>
        <label for="cpf">CPF:</label>
        <br>
        <input value="<?= $aluno->cpf ?>    " type="text" id="cpf" name="cpf">
        <br>
        <br>
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>