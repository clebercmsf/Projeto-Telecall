// dark-mode
const chk = document.getElementById("chk")

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  switchLogo();
  switchLogo1();
})

// switchLogo
var logoLight = "../../assets/img/telecall-logo6-light.png";
var logoDark = "../../assets/img/telecall-logo6-dark.png";

function switchLogo() {
document.getElementById("logo").src = logoDark;
let aux = logoDark;
logoDark = logoLight;
logoLight = aux;
}

function switchLogo1() {
  document.getElementById("logo1").src = logoDark;
  let aux = logoDark;
  logoDark = logoLight;
  logoLight = aux;
}