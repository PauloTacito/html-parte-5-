<?php 
    $conexao = new mysqli('localhost','root','12345','sga');

   $sql = "DELETE FROM `cargos` WHERE `id` = {$_POST['id']}";
   
     $conexao->query($sql);

   echo("Registro apagado com sucesso!");

    $conexao->close();

   header("Refresh:3;/sga/cargos/index.php");
?>