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

// cellNumber input format;
const cellInput = document.querySelector("#c-number");

cellInput.addEventListener("keypress", () => {
  let cellLength = cellInput.value.length;

  if (cellLength === 0) {
    cellInput.value += "(+55)";
  } else if (cellLength === 7) {
    cellInput.value += "-";
  } else if (cellLength === 13) {
    cellInput.value += "-";
  }
});

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
  window.location.href = '../contatos/contatos.html';
}

function internetDedicadaRedirect() {
  window.location.href = '../internetDedicada/internetDedicada.html';
}

function bandaLargaRedirect() {
  window.location.href = '../bandaLarga/bandaLarga.html';
}

function wifiRedirect() {
  window.location.href = '../wifiRedirect/wifiRedirect.html';
}