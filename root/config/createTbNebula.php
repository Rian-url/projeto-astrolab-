<?php
include("../conexao.php");

try{

  
  $sql = "create table tb_nebula(
  cd_nebula int PRIMARY KEY AUTO_INCREMENT,
  fk_cd_user int not null,
  nm_classification varchar(20) not null,
  ds_nebula longtext,
  img_nebula varchar (100) not null,
  foreign key (fk_cd_user) references tb_user(cd_user)
);";

  $conn->query($sql);
  echo "Tabela Nebula criada com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>