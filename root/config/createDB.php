<?php 
include("../conexao.php");

try {


  $sql = "CREATE DATABASE bd_sistema;";

  $conn->query($sql);

  echo "Banco de dados criado com sucesso";
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>