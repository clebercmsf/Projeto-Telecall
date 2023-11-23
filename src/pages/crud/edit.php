<?php
include_once('config.php');

if (!empty($_GET['id_Usuario'])) {
  $id = $_GET['id_Usuario'];
  $sqlSelect = "SELECT * FROM usuario WHERE id_Usuario=$id";
  $result = $conexao->query($sqlSelect);
  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {
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
    }
  } else {
    header('Location: sistema.php');
  }
} else {
  header('Location: sistema.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário | GN</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    }

    .box {
      color: white;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.6);
      padding: 15px;
      border-radius: 15px;
      width: 20%;
    }

    fieldset {
      border: 3px solid dodgerblue;
    }

    legend {
      border: 1px solid dodgerblue;
      padding: 10px;
      text-align: center;
      background-color: dodgerblue;
      border-radius: 8px;
    }

    .inputBox {
      position: relative;
    }

    .inputUser {
      background: none;
      border: none;
      border-bottom: 1px solid white;
      outline: none;
      color: white;
      font-size: 15px;
      width: 100%;
      letter-spacing: 2px;
    }

    .labelInput {
      position: absolute;
      top: 0px;
      left: 0px;
      pointer-events: none;
      transition: .5s;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
      top: -20px;
      font-size: 12px;
      color: dodgerblue;
    }

    #data_nascimento {
      border: none;
      padding: 8px;
      border-radius: 10px;
      outline: none;
      font-size: 15px;
    }

    #submit {
      background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
      width: 100%;
      border: none;
      padding: 15px;
      color: white;
      font-size: 15px;
      cursor: pointer;
      border-radius: 10px;
    }

    #submit:hover {
      background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
    }
  </style>
</head>

<body>
  <a href="sistema.php">Voltar</a>
  <div class="box">
    <form action="saveEdit.php" method="POST">
      <fieldset>
        <legend><b>Editar Cliente</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome; ?> required>
          <label for="nome" class="labelInput">Nome completo</label>
        </div>
        <br><br>
        <div class="inputBox">
          <label for="birth"><b>Data de Nascimento:</b></label>
          <input type="date" name="birth" id="birth" value=<?php echo $birth; ?> required>
          <br><br><br>
        </div>
        <br><br>
        <p>Sexo:</p>
        <input type="radio" id="sexm" name="gender" value="Masculino" <?php echo ($sexo == 'Masculino') ? 'checked' : ''; ?> required>
        <label for="sexm">Masculino</label>
        <br>
        <input type="radio" id="sexf" name="gender" value="Feminino" <?php echo ($sexo == 'Feminino') ? 'checked' : ''; ?> required>
        <label for="sexf">Feminino</label>
        <br>
        <input type="radio" id="other" name="gender" value="Outro" <?php echo ($sexo == 'Outro') ? 'checked' : ''; ?> required>
        <label for="other">Outro</label>
        <br><br>
        <div class="inputBox">
          <input type="text" name="mName" id="mName" class="inputUser" value=<?php echo $mName; ?> required>
          <label for="mName" class="labelInput">Nome Materno</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="cpf" id="cpf" class="inputUser" value=<?php echo $cpf; ?> required>
          <label for="cpf" class="labelInput">CPF</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="cNumber" id="cNumber" class="inputUser" value=<?php echo $cNumber; ?> required>
          <label for="cNumber" class="labelInput">Nome Materno</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="tNumber" id="tNumber" class="inputUser" value=<?php echo $tNumber; ?> required>
          <label for="tNumber" class="labelInput">Nome Materno</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="address" id="address" class="inputUser" value=<?php echo $address; ?> required>
          <label for="address" class="labelInput">Endereço</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="username" id="username" class="inputUser" value=<?php echo $username; ?> required>
          <label for="username" class="labelInput">Usuario</label>
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="password" id="password" class="inputUser" value=<?php echo $password; ?> required>
          <label for="password" class="labelInput">Senha</label>
        </div>
        <br><br>
        <input type="hidden" name="id" value=<?php echo $id; ?>>
        <input type="submit" name="update" id="submit">
      </fieldset>
    </form>
  </div>
</body>

</html>