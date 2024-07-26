<?php
include("../conexao.php");

try{

  
  $sql = "create table tb_planet( 
    cd_planet int PRIMARY KEY AUTO_INCREMENT,
    fk_cd_user int not null,
    nm_planet varchar(30) not null,
    nm_classification varchar(20) not null,
    ds_planet longtext,
    img_planet varchar(100) not null,
    foreign key (fk_cd_user) references tb_user(cd_user)
);";

  $conn->query($sql);
  echo "Tabela Planet criada com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>