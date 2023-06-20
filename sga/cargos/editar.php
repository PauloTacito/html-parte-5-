<?php 
$conexao = new mysqli('localhost','root','12345','sga');

$sql = "SELECT * FROM `cargos` WHERE `id` = {$_GET['id']}";

$resultado =  $conexao->query($sql);

$cargos = $resultado-> fetch_object();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cargos</title>
</head>
<body>
    <h3>Editar Cargos</h3>
    <form action="funcoes/atualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $cargos->id?>">
        <br>
        <label for="nome">Nome:</label>
        <br>
        <input value="<?= $cargos->nomeCargo ?>" type="text" id="nome" name="nome">
        <br>
        <br>
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>