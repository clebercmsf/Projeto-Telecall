function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var dataSaved = JSON.parse(localStorage.getItem("dados"));

    var dataValidate = false;
    for (var i = 0; i < dataSaved.length; i++) {
      if (username === dataSaved[i].username && password === dataSaved[i].password) {
        dataSaved = true;
        break;
      }
    }

    if (dataSaved == true) {
      alert("Login bem-sucedido!");
      window.location.href = "/src/pages/home/home.html";
    } else {
      alert("Usuário ou senha incorretos. Tente novamente.");
    }
}

// dark-mode
const darkModeToggle = document.querySelector("#dark-mode-toggle");

darkModeToggle.addEventListener("click", function() {
  document.body.classList.toggle("dark-mode"),
  switchLogo();
  // if(document.body.classList.contains("dark-mode")) {
  //   darkModeToggle.textContent = "Tema Claro";
  // } else {
  //   darkModeToggle.textContent = "Tema Escuro";
  // }
})
  var logoLight = "../../assets/img/telecall-logo4-light.png";
  var logoDark = "../../assets/img/telecall-logo4-dark.png";

function switchLogo() {
  document.getElementById("logo").src = logoDark;
  let aux = logoDark;
  logoDark = logoLight;
  logoLight = aux;
}