<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "SELECT * FROM sga.funcionarios, sga.cargos WHERE funcionarios.cargos_id = cargos.id;";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
</head>
<body>
    <h3>Lista de Funcionarios</h3>
    <a href="adicionar.php">Adicionar um funcionário</a>
   <table border=1>

   <thead>
    
    <th>Nome</th>
    <th>Gênero</th>
    <th>DtNascimento</th>
    <th>Cpf</th>
    <th>Celular</th>
    <th>Cns</th>
    <th>Email</th>
    <th>Status</th>
    <th>DtCadastro</th>
    <th>NumConselho</th>
    <th>Cargo</th>
    <th>Ações</th>
   
   </thead> 

    
    <tbody>
    <?php if($resultado->num_rows) { ?>
    <?php while($funcionarios   = $resultado->fetch_object()) { ?>
        <tr>
        
        <td><?php echo($funcionarios->nome); ?></td>
        <td><?= $funcionarios->genero ?></td>
        <td><?= $funcionarios->dtNascimento ?></td>
        <td><?= $funcionarios->cpf ?></td>
        <td><?= $funcionarios->celular ?></td>
        <td><?= $funcionarios->cns ?></td>
        <td><?= $funcionarios->email ?></td>
        <td><?= $funcionarios->status ?></td>
        <td><?= $funcionarios->dtCadastro ?></td>
        <td><?= $funcionarios->numConselho ?></td>
        <td><?= $funcionarios->nomeCargo ?></td>        
        <td>
            <a href="editar.php?id=<?php echo($funcionarios->id) ?>">Editar</a> -
            <a href="excluir.php?id=<?php echo($funcionarios->id) ?>">Excluir</a>
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
   <a href="/sga/index.php">Voltar</a>
</body>
</html>