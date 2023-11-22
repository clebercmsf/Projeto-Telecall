<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Telecall</title>
  <link rel="stylesheet" href="./login.css">
  <script src="../../models/jquery.js"></script>
  <link rel="icon" href="../../assets/img/telecall-logo4-light.png" />
</head>

<body>
  <header>
    <nav class="header">
      <a class="header" href="../home/home.php">
        <img src="../../assets/img/telecall-logo4-light.png" alt="telecall-logo" id="logo">
      </a>
    </nav>
  </header>

  <section class="login">
    <section class="card-login">
      <h1>LOGIN</h1>
      <form id="form">
      <div class="textfield">
        <label for="username">Usuário</label>
        <input type="text" placeholder="Usuário" id="username" autocomplete="off">
      </div>
      <div class="textfield">
        <label for="password">Senha</label>
        <input type="password" placeholder="Senha" id="password" autocomplete="off">
      </div>
      <div class="register">
        <label><br>Ainda não possui uma conta? <a href="../register/register.php">Crie aqui.</a></label>
      </div>
      <div class="btn-login-submit">
        <input type="submit" class="btn-login" value="enviar" onclick="event.preventDefault(); loginValidate();">
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

<script src="login.js"></script>
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

</html>