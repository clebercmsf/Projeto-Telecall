// login
function getCookie(name) {
  var cookies = document.cookie.split(';');
  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i].trim();
    if (cookie.indexOf(name) === 0) {
      return cookie.substring(name.length + 1, cookie.length);
    }
  }
  return null;
}

function loginValidate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  console.log("Usuário: " + username);
  console.log("password: " + password);

  var userRegistered = getCookie("username");
  var passwordRegistered = getCookie("password");

  if (username === userRegistered && password === passwordRegistered) {
    // window.location.href = 'http://www.google.com';
    document.querySelector('.notification-container-success').style.display = 'flex';

    setTimeout(function() {
      window.location.href = 'http://www.google.com';
    }, 2000);
  } else {
    document.querySelector('.notification-container-fail').style.display = 'flex';

    setTimeout(function() {
      document.querySelector('.notification-container-fail').style.display = 'none';
    }, 2000);
  }
}

// dark-mode
const chk = document.getElementById("chk")

chk.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode"),
  switchLogo();
})

var logoLight = "../../assets/img/telecall-logo4-light.png";
var logoDark = "../../assets/img/telecall-logo4-dark.png";

function switchLogo() {
document.getElementById("logo").src = logoDark;
let aux = logoDark;
logoDark = logoLight;
logoLight = aux;
}