<?php 
$servename = "localhost:3306";
$username = "root";
// $password = "root";

// meu servidor
$password = "tubas1234";


try {
  $conn = new PDO("mysql:host=$servename; dbname=bd_sistema", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $con = $conn;
  // echo "<script> alert('Banco de dados conectado com sucesso') </script>";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}

function validar(){

if (isset($_SESSION['email'])) {

  $servename = "localhost:3306";
  $username = "root";
  $password = "tubas1234";

  $conn = new PDO("mysql:host=$servename; dbname=bd_sistema", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $rs = $conn->prepare("SELECT nm_user, access_level FROM tb_user where nm_email = '". $_SESSION['email']."' ");

  $rs->execute();
  $row = $rs->fetch();

  // echo " <script>	window.alert('Acesso permitido'); </script>";

} else {
  echo " <script>	window.alert('Acesso não permitido'); window.location.href='../index.php'; </script>";
}
}
?>