// dark-mode
const chk = document.getElementById("chk")

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  switchLogoHeader();
  switchLogoFooter();
})

// switchLogo
var logoLightHeader = "../../assets/img/telecall-logo6-light.png";
var logoDarkHeader = "../../assets/img/telecall-logo6-dark.png";

function switchLogoHeader() {
  document.getElementById("logo-header").src = logoDarkHeader;
  let aux = logoDarkHeader;
  logoDarkHeader = logoLightHeader;
  logoLightHeader = aux;
}

var logoLightFooter = "../../assets/img/telecall-logo6-light.png";
var logoDarkFooter = "../../assets/img/telecall-logo6-dark.png";

function switchLogoFooter() {
  document.getElementById("logo-footer").src = logoDarkFooter;
  let aux = logoDarkFooter;
  logoDarkFooter = logoLightFooter;
  logoLightFooter = aux;
}

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