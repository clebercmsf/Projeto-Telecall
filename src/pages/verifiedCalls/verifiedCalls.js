// up to top button
window.onscroll = function () { showTopButton() };

function showTopButton() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("btnTop").style.display = "block";
  } else {
    document.getElementById("btnTop").style.display = "none";
  }
}

function upToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// dark-mode
const chk = document.getElementById("chk")

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  switchLogo();
  // switchIcons();
  // switchIcons2();
})


// switchLogo
var logoLightHeader = "../../assets/img/telecall-logo6-light.png";
var logoDarkHeader = "../../assets/img/telecall-logo6-dark.png";

var logoLightFooter = "../../assets/img/telecall-logo6-light.png";
var logoDarkFooter = "../../assets/img/telecall-logo6-dark.png";

function switchLogo() {
  document.getElementById("logo-header").src = logoDarkHeader;
  let auxHeader = logoDarkHeader;
  logoDarkHeader = logoLightHeader;
  logoLightHeader = auxHeader;

  document.getElementById("logo-footer").src = logoDarkFooter;
  let auxFooter = logoDarkFooter;
  logoDarkFooter = logoLightFooter;
  logoLightFooter = auxFooter;
}

// redirecting
function contactRedirect() {
  window.location.href = '../contatos/contatos.php';
}

function internetDedicadaRedirect() {
  window.location.href = '../internetDedicada/internetDedicada.php';
}

function wifiRedirect() {
  window.location.href = '../wifiRedirect/wifiRedirect.php';
}

function pabxRedirect() {
  window.location.href = '../pabx/pabx.php';
}

function logout() {
  window.location.href = '../crud/sair.php';
}

function crud() {
  window.location.href = '../crud/sistema.php';
}