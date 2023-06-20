<?php
    $conexao = new mysqli('localhost','root','12345','escola');

    $sql = "SELECT * FROM aluno"; 

    $resultado = $conexao->query($sql);
    
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>
</head>
<body>
    <h3>Lista de Alunos</h3>
    <a href="create.php">Cadastrar Alunos</a>
    <br>
    <br>
<table border=1>
<thead>
    <th>Matrícula</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Ações</th>
</thead>
<tbody>
   <?php if($resultado->num_rows) { ?>
    <?php while($aluno = $resultado->fetch_object()) { ?>
        <tr>
        <td><?php print($aluno->matricula); ?></td>
        <td><?php echo($aluno->nome); ?></td>
        <td><?= $aluno->cpf ?></td>
        <td>
            <a href="edit.php?id=<?php echo($aluno->id) ?>">Editar</a> -
            <a href="delete.php?id=<?php echo($aluno->id) ?>">Excluir</a>
        </td>
        </tr>
        <?php } ?>
 
    <?php } else { ?>
        <tr>
            <td colspan=4>Nenhum resultado encontrado.</td>
        </tr>
        <?php } ?>
</tbody>
</table>

</body>
</html>