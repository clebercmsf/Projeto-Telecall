<?php
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
        echo "success";
    } else {
        echo "failure";
    }
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>