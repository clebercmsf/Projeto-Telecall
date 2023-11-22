<?php
  $connect = new PDO("mysql:host=localhost;dbname=db_telecall", "root", "");

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM usuario WHERE Login_Usuario = '$username' and Senha_Usuario = '$password'";

  $result = $connect->query($sql);

  if (mysqli_num_rows($result) < 1) {
    
  }

  // $qry = $connect->prepare('INSERT INTO usuario (Nome_Usuario, Nascimento_Usuario, Sexo_Usuario, Nome_Materno, CPF_Usuario, Celular_Usuario, Telefone_Usuario, Endereco_Usuario, Login_Usuario, Senha_Usuario, Perfil_Usuario) values (:nome, :birth, :gender, :mName, :cpf, :cNumber, :tNumber, :addres, :username, :pasword, :perfil)');
	// 	$qry->bindValue(':nome', $nome);
	// 	$qry->bindValue(':birth', $birth);
  //   $qry->bindValue(':gender', $gender);
  //   $qry->bindValue(':mName', $mName);
  //   $qry->bindValue(':cpf', $cpf);
  //   $qry->bindValue(':cNumber', $cNumber);
  //   $qry->bindValue(':tNumber', $tNumber);
  //   $qry->bindValue(':addres', $address);
  //   $qry->bindValue(':username', $username);
  //   $qry->bindValue(':pasword', $password);
  //   $qry->bindValue(':perfil', 2);
	// 	$qry->execute();
?>