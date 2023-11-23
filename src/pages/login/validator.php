<?php
session_start();

try {
  $connect = new PDO("mysql:host=localhost;dbname=db_telecall", "root", "");

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM usuario WHERE Login_Usuario = :username AND Senha_Usuario = :pasword";
  $stmt = $connect->prepare($sql);
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':pasword', $password);
  $stmt->execute();

  $rowCount = $stmt->rowCount();

  if ($rowCount > 0) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['profile']);
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $profile = $row['Perfil_Usuario'];

    $_SESSION['username'] = $row['Login_Usuario'];
    $_SESSION['password'] = $row['Senha_Usuario'];
    $_SESSION['profile'] = $profile;

    echo json_encode(['status' => 'success', 'profile' => $profile]);
  } else {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['profile']);
    
    echo json_encode(['status' => 'failure']);
  }
} catch (PDOException $e) {
  echo json_encode(['status' => 'error', 'message' => 'Erro na conexão com o banco de dados: ' . $e->getMessage()]);
}