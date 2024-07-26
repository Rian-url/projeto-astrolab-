<?php
include("../conexao.php");

try{

  $sql = "create table tb_product(
  cd_product int PRIMARY KEY AUTO_INCREMENT,
  fk_cd_user int not null,
  nm_product varchar(50) not null,
  nm_color varchar(20) not null,
  vl_weight decimal(6,2) not null,
  nm_material varchar(20) not null,
  nr_amount int not null,
  nm_category varchar(20) not null,
  vl_product decimal(8,2) not null,
  vl_cost decimal(8,2) not null,
  img_product varchar (100),
  foreign key (fk_cd_user) references tb_user(cd_user)
);";

  $conn->query($sql);
  echo "Tabela Product criada com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

?>