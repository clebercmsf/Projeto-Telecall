<?php
if (!empty($_GET['id'])) {
  try {
    $connect = new PDO("mysql:host=localhost;dbname=db_telecall", "root", "");

    $id_Usuario = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuario WHERE id_Usuario = :id_Usuario";
    $stmt = $connect->prepare($sqlSelect);
    $stmt->bindParam(':id_Usuario', $id_Usuario, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $sqlDelete = "DELETE FROM usuario WHERE id_Usuario=:id_Usuario";
      $stmtDelete = $connect->prepare($sqlDelete);
      $stmtDelete->bindParam(':id_Usuario', $id_Usuario, PDO::PARAM_INT);
      $stmtDelete->execute();
    }
  } catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    exit;
  }
}

header('Location: sistema.php');