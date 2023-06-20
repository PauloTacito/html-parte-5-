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
    <title>Cargos</title>
</head>
<body>
    <h3>Lista de Cargos</h3>

    <a href="adicionar.php">Adicionar Cargo</a>
<table border=1>
<thead>
    <th>Nome</th>
    <th>Ações</th>
</thead>
<tbody>
<?php if($resultado->num_rows) { ?>
    <?php while($cargos   = $resultado->fetch_object()) { ?>
        <tr>
        <td><?php echo($cargos->nomeCargo); ?></td>
        <td>
            <a href="editar.php?id=<?php echo($cargos->id) ?>">Editar</a> -
            <a href="excluir.php?id=<?php echo($cargos->id) ?>">Excluir</a>
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