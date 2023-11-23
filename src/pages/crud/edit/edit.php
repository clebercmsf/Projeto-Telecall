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
      $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

      $nome = $user_data["Nome_Usuario"];
      $birth = $user_data["Nascimento_Usuario"];
      $gender = $user_data["Sexo_Usuario"];
      $mName = $user_data["Nome_Materno"];
      $cpf = $user_data["CPF_Usuario"];
      $cNumber = $user_data["Celular_Usuario"];
      $tNumber = $user_data["Telefone_Usuario"];
      $address = $user_data["Endereco_Usuario"];
      $username = $user_data["Login_Usuario"];
    } else {
      header('Location: ../sistema.php');
      exit;
    }
  } catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro - Telecall</title>
  <link rel="stylesheet" href="../../register/register.css" />
  <script src="../../../models/jquery.js"></script>
  <link rel="icon" href="../../../assets/img/telecall-logo4-light.png" />
</head>

<body>
  <header>
    <nav class="header">
      <a class="header" href="../sistema.php">
        <img src="../../../assets/img/telecall-logo4-light.png" alt="telecall-logo" id="logo">
      </a>
    </nav>
  </header>

  <section class="register">
    <section class="card-register">
      <h1>CADASTRO</h1>
      <form method="POST" id="form">
        <div class="textfield">
          <label for="name">Nome</label>
          <input type="text" placeholder="Nome" id="name" name="nome" class="required" autocomplete="off" value="<?php echo $nome ?>" />
          <span class="span-required">O nome deve ter entre 15 e 60 caracteres alfabéticos.</span>
        </div>
        <div class="textfield">
          <label for="birth">Data de Nascimento</label>
          <input type="date" placeholder="Usuário" id="birth" name="birth" class="required" autocomplete="off" value="<?php echo $birth ?>" />
          <span class="span-required">Este campo deve ser preenchido.</span>
        </div>
        <div class="textfield">
          <label for="gender">Sexo</label>
          <div class="gender">
            <input type="radio" name="gender" id="sexm" value="Masculino" <?php $gender == "Masculino" ? 'checked' : '' ?> /><label for="sexm">Masculino</label>
            <input type="radio" name="gender" id="sexf" value="Feminino" <?php $gender == "Feminino" ? 'checked' : '' ?> /><label for="sexf">Feminino</label>
            <input type="radio" name="gender" id="other" value="Outro" <?php $gender == "Outro" ? 'checked' : '' ?> /><label for="other">Outro</label>
          </div>
        </div>
        <div class="textfield">
          <label for="mName"><br>Nome Materno</label>
          <input type="text" placeholder="Nome Materno" id="mName" name="mName" class="required" autocomplete="off" value="<?php echo $mName ?>" />
          <span class="span-required">O nome deve ter entre 15 e 60 caracteres alfabéticos.</span>
        </div>
        <div class="textfield">
          <label for="cpf">CPF</label>
          <input type="text" placeholder="xxx.xxx.xxx-xx" maxlength="14" id="cpf" name="cpf" class="required" autocomplete="off" value="<?php echo $cpf ?>" />
          <span class="span-required">Este campo deve ser preenchido.</span>
        </div>
        <div class="textfield">
          <label for="cNumber">Numero de Celular</label>
          <input type="tel" placeholder="(+55)xx-xxxxx-xxxx" maxlength="18" id="cNumber" name="cNumber" class="required" autocomplete="off" value="<?php echo $cNumber ?>" />
          <span class="span-required">Este campo deve ser preenchido.</span>
        </div>
        <div class="textfield">
          <label for="tNumber">Numero de Telefone Fixo</label>
          <input type="tel" placeholder="(+55)xx-xxxx-xxxx" maxlength="17" id="tNumber" name="tNumber" class="required" autocomplete="off" value="<?php echo $tNumber ?>" />
          <span class="span-required">Este campo deve ser preenchido.</span>
        </div>
        <div class="textfield">
          <label for="address">Endereço</label>
          <input type="text" placeholder="Endereço" id="address" name="address" class="required" autocomplete="off" value="<?php echo $address ?>" />
          <span class="span-required">Este campo deve ser preenchido.</span>
        </div>
        <div class="textfield">
          <label for="user">Usuário</label>
          <input type="text" placeholder="Usuário" class="required" id="username" name="username" autocomplete="off" value="<?php echo $username ?>" />
          <span class="span-required">Usuário deve ter 6 caracteres alfabéticos.</span>
        </div>
        <div class="textfield">
          <label for="password">Senha</label>
          <input type="password" placeholder="Senha" class="required" oninput="passwordValidator()" autocomplete="off" />
          <span class="span-required">A senha deve ter ao menos 8 caracteres alfabéticos.</span>
        </div>
        <div class="textfield">
          <label for="conf-password">Confirme a Senha</label>
          <input type="password" placeholder="Confirme a Senha" class="required" id="password" name="password" oninput="passwordConfirm()" autocomplete="off" />
          <span class="span-required">Senhas não conferem.</span>
        </div>
        <div class="login">
          <label>Já possui uma conta?
            <a href="../../login/login.php">Entre aqui.</a></label>
        </div>
        <div>
          <input type="submit" class="btn-register" value="enviar" onclick="userRegister()">
        </div>
      </form>
    </section>
  </section>

  <div class="alert"></div>

  <footer>
    <div class="dark-mode-footer">
      <input type="checkbox" class="dark-mode-button" id="chk" />
      <label class="dark-mode-label" for="chk">
        <i class="fas fa-moon"></i>
        <i class="fas fa-sun"></i>
        <div class="ball"></div>
      </label>
    </div>
  </footer>
</body>

<script src="edit.js"></script>
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

</html>