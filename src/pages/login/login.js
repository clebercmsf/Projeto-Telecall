// login
function getCookie(name) {
  let cookies = document.cookie.split(';');
  for (let i = 0; i < cookies.length; i++) {
    let cookie = cookies[i].trim();
    if (cookie.indexOf(name) === 0) {
      return cookie.substring(name.length + 1, cookie.length);
    }
  }
  return null;
}

function loginValidate() {
  // jquery | ajax
  let username = $('#username').val();
  let password = $('#password').val();
  

  if (username != "" && password != "") {
    $.ajax({
      url: 'validator.php',
      method: 'POST',
      data: { username: username, password: password },
      dataType: 'json',
      success: function (response) {
        if (response.status === 'failure') {
          activate(msgError);
        } else if (response.status === 'success'){
          activate(msgSuccess);
          
          setTimeout(function () {
            window.location.href = '../home/home.php';
          }, 2000);
        }
      },
      error: function () {
        activate(msgError);
      }
    });

  } else {
    activate(msgError);
  }
}

// alert
const divMessage = document.querySelector(".alert");

const msgSuccess = "Login efetuado com sucesso!";
const msgError = "Usuário ou Senha inválidos!";

function activate(msg) {
  const message = document.createElement("div");
  if (msg === msgSuccess) {
    message.classList.add("messageSuccess");
  } else {
    message.classList.add("messageError");
  }

  message.innerText = msg;
  divMessage.appendChild(message);

  setTimeout(() => {
    message.style.display = "none";
  }, 2000);
}

// dark-mode
const chk = document.getElementById("chk")

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode");
  switchLogo();
})

// switchLogo
var logoLight = "../../assets/img/telecall-logo4-light.png";
var logoDark = "../../assets/img/telecall-logo4-dark.png";

function switchLogo() {
  document.getElementById("logo").src = logoDark;
  let aux = logoDark;
  logoDark = logoLight;
  logoLight = aux;
}