<?php

include("../conexao.php");



try{

  
  $sql = "create table tb_blackHole(
  cd_hole int PRIMARY KEY AUTO_INCREMENT,
  fk_cd_user int not null,
  img_hole varchar (100),
  foreign key (fk_cd_user) references tb_user(cd_user)
  );";

  $conn->query($sql);
  echo "Tabela Black Hole criada com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


?>