<?php
// isset -> serve para saber se uma variável está definida
include_once('config.php');
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $nome = $user_data['nome'];
  $birth = $user_data['birth'];
  $gender = $user_data['gender'];
  $mName = $user_data['mName'];
  $cpf = $user_data['cpf'];
  $cNumber = $user_data['cNumber'];
  $tNumber = $user_data['tNumber'];
  $address = $user_data['address'];
  $username = $user_data['username'];
  $password = $user_data['password'];

  $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE id=$id";
  $result = $conexao->query($sqlInsert);
  print_r($result);
}
header('Location: sistema.php');
