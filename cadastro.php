<?php

include("./conexao.php");

$usuario = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro(nome,email,senha) VALUES('$usuario', '$email', '$senha')";

if(mysql_quely($conexao, $sql))
   echo "Cadastro realizado!";
else
   echo "Erro! ".mysqli_connect_erro($conexao);

   mysqli_close($conexao);

?>