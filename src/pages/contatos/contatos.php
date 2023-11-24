<?php
session_start();
include_once('../crud/config.php');
$logado = "Login";
if (isset($_SESSION['username'])) {
  $logado = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contatos - Telecall</title>
  <link rel="stylesheet" href="./contatos.css">
  <link rel="icon" href="../../assets/img/telecall-logo4-light.png" />
  <script src="https://kit.fontawesome.com/71235f940f.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="nav-bar">
      <div class="logo">
        <a href="../home/home.php">
          <img src="../../assets/img/telecall-logo6-light.png" alt="telecall-logo" id="logo-header">
        </a>
      </div>

      <ul class="menu">
        <li class="menu-link">
          <a href="../internet/internet.php" class="menu-link">Internet</a>
          <ul class="submenu">
            <li><a href="#" class="submenu-link">Internet Dedicada</a></li>
            <li><a href="#" class="submenu-link">Banda Larga</a></li>
            <li><a href="#" class="submenu-link">Wi-fi</a></li>
          </ul>
        </li>
        <li class="menu-link">
          <a href="../cpaas/cpaas.php" class="menu-link">CPaaS</a>
          <ul class="submenu">
            <li><a href="../2fa/2fa.php" class="submenu-link">2FA</a></li>
            <li><a href="../numeroMascara/numeroMascara.php" class="submenu-link">Número Máscara</a></li>
            <li><a href="../verifiedCalls/verifiedCalls.php" class="submenu-link">Verified Calls</a></li>
            <li><a href="../smsProgramavel/smsProgramavel.php" class="submenu-link">SMS Programável</a></li>
          </ul>
        </li>
        <li class="menu-link">
          <a href="../mobilidade/mobilidade.php" class="menu-link">Mobilidade</a>
          <ul class="submenu">
            <li><a href="#" class="submenu-link">Celular Empresarial</a></li>
            <li><a href="#" class="submenu-link">MVNA/E</a></li>
          </ul>
        </li>
        <li><a href="../eventos/eventos.php" class="menu-link">Eventos</a></li>
        <li><a href="../contatos/contatos.php" class="menu-link">Contatos</a></li>
      </ul>

      <div class="hamburguer">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>

      <div class="login-btn">
        <div class="dark-mode-footer">
          <input type="checkbox" class="dark-mode-button" id="chk" />
          <label class="dark-mode-label" for="chk">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div>
          </label>
        </div>
        <?php
          if ($logado != "Login") {
            echo "<button onclick='logout();'>Sair</button>";
            if ($_SESSION['profile'] == 1) {
              echo "<button onclick='crud();'>CRUD</button>";
            }
          }
        ?>
        <button onclick="window.location.href='../login/login.php'"><svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"
              fill="#ffffff" />
          </svg><?php echo $logado?>
        </button>
      </div>
    </nav>
  </header>

  <section class="containerHeader">
    <div class="containerHeader-content">
      <div class="containerHeader-title">
        <h1>Contatos</h1>
      </div>
    </div>
  </section>

  <section class="contate">
    <div class="contatLinks">
      <div class="card-contate" id="card">
        <h3>Ligue ou envie um WhatsApp para nós</h3>
        <h2>(21) 3030-1010</h2>
      </div>
      <div class="card-contate" id="card">
        <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial" target="_blank"><img src="../../assets/icons/whatsapp-icon.png" alt="wpp"> WhatsApp Comercial</a>
        <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Suporte" target="_blank"><img src="../../assets/icons/whatsapp-icon.png" alt="wpp"> WhatsApp Suporte</a>
        <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Financeiro" target="_blank"><img src="../../assets/icons/whatsapp-icon.png" alt="wpp"> WhatsApp Financeiro</a>
      </div>
      <div class="card-contate" id="card">
        <h3>Envie um e-mail</h3>
        <h2>suporte@telecall.com</h2>
        <h3>Respondemos em até 24h</h3>
      </div>
      <div class="card-contate" id="card">
        <h1>Escritórios</h1>
        <h2>Brasil</h2>
        Centro empresarial Mario Henrique Simonsen Av. das Américas, 3434 | Bloco 1, Sala 505 Barra da Tijuca | Rio de Janeiro, RJ
        <h2>Estados Unidos</h2>
        848 Brickell Av - Suite 1235 - Miami FL - 33131
        <h2>Portugal</h2>
        Avenida da Liberdade nº 245, 4º piso, sala 402 Lisboa, Portugal, 1250-143
        <h2>Inglaterra</h2>
        8 Devonshire Squae, Londom EC2M 4YJ
      </div>
    </div>

    <div id="card-rigth"
    class="card-contate">
      <h1>NOS CONTATE</h1>
      <form id="form">
      <div class="textfield">
        <label for="name">Nome</label>
        <input type="text" placeholder="Nome" id="name" autocomplete="off">
      </div>
      <div class="textfield">
        <label for="company">Empresa</label>
        <input type="text" placeholder="Empresa" id="company" autocomplete="off">
      </div>
      <div class="textfield">
        <label for="c-number">Numero de Celular</label>
        <input type="tel" placeholder="(+55)xx-xxxxx-xxxx" maxlength="18" id="c-number" name="c-number" class="required" autocomplete="off" oninput="cNumberValidator()"/>
      </div>
      <div class="textfield">
        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="email" autocomplete="off">
      </div>
      <div class="textfield">
        <label for="subject">Assunto</label>
        <input type="text" placeholder="Assunto" id="subject" autocomplete="off">
      </div>
      <div class="textfield">
        <label for="message">Mensagem</label>
        <textarea name="message" id="message" cols="50" rows="12" placeholder="Digite sua mensagem..."></textarea>
      </div>
      <div class="btn-contate-submit">
        <input type="submit" class="btn-contate" value="enviar">
      </div>
      </form>
    </div>
  </section>

  <button id="btnTop" onclick="upToTop()"></button>

  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <a href="../home/home.php">
          <img src="../../assets/img/telecall-logo6-light.png" alt="telecall-logo" id="logo-footer">
        </a>
        <p>O mais alto padrão de qualidade.</p>
        <div id="footer_social_media">
          <a href="https://www.instagram.com/telecallbr/" target="_blank" class="link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/TelecallBr" target="_blank" class="link" id="facebook">
            <i class="fa-brands fa-facebook-f"> </i>
          </a>
          <a href="https://www.linkedin.com/company/telecall/" target="_blank" class="link" id="linkedin">
            <i class="fa-brands fa-linkedin"></i>
          </a>
        </div>
      </div>

      <ul class="footer-list">
        <li>
          <h2>PÁGINAS</h2>
          <ul>
            <li><a href="../internet/internet.php" class="link">Internet</a></li>
            <li><a href="../cpaas/cpaas.php" class="link">CpasS</a></li>
            <li><a href="../mobilidade/mobilidade.php" class="link">Mobilidade</a></li>
            <li><a href="../eventos/eventos.php" class="link">Eventos</a></li>
            <li><a href="../contatos/contatos.php" class="link">Contatos</a></li>
          </ul>
        </li>
      </ul>

      <ul class="footer-list">
        <li>
          <h2>ACESSIBILIDADE</h2>
          <div class="alert"></div>
            <div class="dark-mode-footer">
              <input type="checkbox" class="dark-mode-button" id="chk" />
              <label class="dark-mode-label" for="chk">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>
              </label>
            </div>
        </li>
      </ul>
    </div>

    <div id="footer_copyright">
      Copyright &#169 2023 Todos os direitos reservados.
    </div>
  </footer>
</body>

<script src="./contatos.js"></script>
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>