<?php
  $connect = new PDO("mysql:host=localhost;dbname=db_telecall", "root", "");

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM usuario WHERE Login_Usuario = '$username' and Senha_Usuario = '$password'";

  $result = $connect->query($sql);

  if ($result->PDO::rowCount > 0) {
    echo "Login bem-sucedido!";
} else {
    echo "Usuário ou senha incorretos.";
}
?>