<?php
if (!empty($_GET['id_Usuario'])) {
  $connect = new PDO("mysql:host=localhost;dbname=db_telecall", "root", "");

  // Evitar injeção SQL usando declaração preparada
  $id = $_GET['id_Usuario'];
  $sqlSelect = "SELECT * FROM usuario WHERE id_Usuario = :id";
  $stmt = $connect->prepare($sqlSelect);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

    $nome = $user_data["nome"];
    $birth = $user_data["birth"];
    $gender = $user_data["gender"];
    $mName = $user_data["mName"];
    $cpf = $user_data["cpf"];
    $cNumber = $user_data["cNumber"];
    $tNumber = $user_data["tNumber"];
    $address = $user_data["address"];
    $username = $user_data["username"];
    $password = $user_data["password"];
  } else {
    header('Location: ../sistema.php');
  }
}
?>