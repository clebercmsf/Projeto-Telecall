<?php
  $connect = new PDO("mysql:host=localhost;dbname=db_telecall", "root", "");

  // $data = [
  //   'nome' => $_POST["nome"],
  //   'gender' => $_POST["gender"],
  //   'mName' => $_POST["mName"],
  //   'cpf' => $_POST["cpf"],
  //   'cNumber' => $_POST["cNumber"],
  //   'tNumber' => $_POST["tNumber"],
  //   'address' => $_POST["address"],
  //   'username' => $_POST["username"],
  //   'password' => $_POST["password"],
  // ];

    $nome = $_POST["nome"];
    $birth = $_POST["birth"];
    $gender = $_POST["gender"];
    $mName = $_POST["mName"];
    $cpf = $_POST["cpf"];
    $cNumber = $_POST["cNumber"];
    $tNumber = $_POST["tNumber"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];

  // $stmt = $connect->prepare('INSERT INTO usuario (Nome_Usuario, Nascimento_Usuario, Sexo_Usuario, Nome_Materno, CPF_Usuario, Celular_Usuario, Telefone_Usuario, Endereco_Usuario, Login_Usuario, Senha_Usuario) values (:nome, :birth, :gender, :mName, :cpf, :cNumber, :tNumber, :address, :username, :password)');

  $qry = $connect->prepare('INSERT INTO usuario (Nome_Usuario, Nascimento_Usuario, Sexo_Usuario, Nome_Materno, CPF_Usuario, Celular_Usuario, Telefone_Usuario, Endereco_Usuario, Login_Usuario, Senha_Usuario, Perfil_Usuario) values (:nome, :birth, :gender, :mName, :cpf, :cNumber, :tNumber, :addres, :username, :pasword, :perfil)');
		$qry->bindValue(':nome', $nome);
		$qry->bindValue(':birth', $birth);
    $qry->bindValue(':gender', $gender);
    $qry->bindValue(':mName', $mName);
    $qry->bindValue(':cpf', $cpf);
    $qry->bindValue(':cNumber', $cNumber);
    $qry->bindValue(':tNumber', $tNumber);
    $qry->bindValue(':addres', $address);
    $qry->bindValue(':username', $username);
    $qry->bindValue(':pasword', $password);
    $qry->bindValue(':perfil', 2);
		$qry->execute();

  // try{
  //   $connect->beginTransaction();
  //   $stmt->execute($data);
  //   $connect->commit();
  //   echo 'Registro salvo com sucesso';
  // } catch (Exception $e) {
  //   $connect->rollBack();
  //   throw $e;
  // }
?>