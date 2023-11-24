<?php
session_start();

try {
    $connect = new PDO("mysql:host=localhost;dbname=db_telecall", "root", "");
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $profile = $_POST["profile"];
    $birth = $_POST["birth"];
    $gender = $_POST["gender"];
    $mName = $_POST["mName"];
    $cpf = $_POST["cpf"];
    $cNumber = $_POST["cNumber"];
    $tNumber = $_POST["tNumber"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($profile == "Master") {
        $profile = 1;
    } elseif ($profile == "Comum") {
        $profile = 2;
    }

    $qry = $connect->prepare('UPDATE usuario SET Nome_Usuario = :nome, Nascimento_Usuario = :birth, Sexo_Usuario = :gender, Nome_Materno = :mName, CPF_Usuario = :cpf, Celular_Usuario = :cNumber, Telefone_Usuario = :tNumber, Endereco_Usuario = :adress, Login_Usuario = :username, Senha_Usuario = :pasword, Perfil_Usuario = :perfil WHERE id_Usuario = :id');
    $qry->bindValue(':nome', $nome);
    $qry->bindValue(':birth', $birth);
    $qry->bindValue(':gender', $gender);
    $qry->bindValue(':mName', $mName);
    $qry->bindValue(':cpf', $cpf);
    $qry->bindValue(':cNumber', $cNumber);
    $qry->bindValue(':tNumber', $tNumber);
    $qry->bindValue(':adress', $address);
    $qry->bindValue(':username', $username);
    $qry->bindValue(':pasword', $password);
    $qry->bindValue(':perfil', $profile);
    $qry->bindValue(':id', $id);

    $qry->execute();
    
    echo json_encode(['status' => 'success']);
} catch (PDOException $e) {
    echo json_encode(['status' => 'failure', 'message' => 'Erro na conexão com o banco de dados: ' . $e->getMessage()]);
}
?>
