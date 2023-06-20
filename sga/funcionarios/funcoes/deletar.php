<?php 
    $conexao = new mysqli('localhost','root','12345','sga');

   $sql = "DELETE FROM `funcionarios` WHERE `id` = {$_POST['id']}";
   
     $conexao->query($sql);

   echo("Registro apagado com sucesso!");

    $conexao->close();

   header("Refresh:3;/sga/funcionarios/index.php");
?>