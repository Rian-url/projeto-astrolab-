<?php
include("../conexao.php");

try{

  
  $sql = "create table tb_user(
  cd_user int PRIMARY KEY AUTO_INCREMENT,
  nm_user varchar(50) not null,
  nm_email varchar(30) not null,
  nm_password varchar(100) not null,
  access_level int not null,
  img_user varchar (100) 
);";

  $conn->query($sql);
  echo "Tabela User criada com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

?>