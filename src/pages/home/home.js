// dark-mode
const chk = document.getElementById("chk")

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  switchLogo();
})

// switchLogo
var logoLight = "../../assets/img/telecall-logo4-light.png";
var logoDark = "../../assets/img/telecall-logo4-dark.png";

// function switchLogo() {
// document.getElementById("logo").src = logoDark;
// let aux = logoDark;
// logoDark = logoLight;
// logoLight = aux;
// }