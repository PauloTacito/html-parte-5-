<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Alunos</title>
</head>
<body>
    <h3>Cadastrar Novo Aluno</h3>
    <form action="funcoes/cadastro.php" method="post">
        <label for="mat">Matrícula:</label>
        <br>
        <input type="number" id="mat" name="matricula">
        <br>
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome">
        <br>
        <label for="cpf">CPF:</label>
        <br>
        <input type="text" id="cpf" name="cpf">
        <br>
        <br>
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>