// show message error;
const form = document.getElementById("form");
const field = document.querySelectorAll(".required");
const spans = document.querySelectorAll(".span-required");
const userRejex = /^[a-zA-Z]{6}$/;
const passwordRejex = /^[a-zA-Z]{8,}$/;

form.addEventListener("submit", (event) => {
  event.preventDefault();
  nameValidator();
  userValidator();
  passwordValidator();
  passwordConfirm();
});

function setError(index) {
  field[index].style.border = "3px solid #5398c9";
  spans[index].style.visibility = "visible";
}

function removeError(index) {
  field[index].style.border = "";
  spans[index].style.visibility = "hidden";
}

function nameValidator() {
  if (field[0].value.length < 15 || field[0].value.length > 60) {
    setError(0);
  } else {
    removeError(0);
  }
}

function userValidator() {
  if (!userRejex.test(field[1].value)) {
    setError(1);
  } else {
    removeError(1);
  }
}

function passwordValidator() {
  if (!passwordRejex.test(field[2].value)) {
    setError(2);
  } else {
    removeError(2);
  }
}

function passwordConfirm() {
  if (field[2].value != field[3].value || field[3].value == "") {
    setError(3);
  } else {
    removeError(3);
  }
}

// CPF input format;
const cpfInput = document.querySelector("#cpf");

cpfInput.addEventListener("keypress", () => {
  let cpfLength = cpfInput.value.length;

  if (cpfLength === 3 || cpfLength === 7) {
    cpfInput.value += ".";
  } else if (cpfLength === 11) {
    cpfInput.value += "-";
  }
});

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

// tellNumber input format;
const tellInput = document.querySelector("#t-number");

tellInput.addEventListener("keypress", () => {
  let tellLength = tellInput.value.length;

  if (tellLength === 0) {
    tellInput.value += "(+55)";
  } else if (tellLength === 7) {
    tellInput.value += "-";
  } else if (tellLength === 12) {
    tellInput.value += "-";
  }
});

// register
function setCookie(name, value) {
  var now = new Date();
  var expires = new Date(now.getTime() + (30 * 24 * 60 * 60 * 1000));
  document.cookie = name + "=" + value + ";expires=" + expires.toUTCString() + ";path=/";
}

function userRegister() {
  if(document.getElementById("name").value.length >= 15 && document.getElementById("name").value.length <= 60 && document.getElementById("username").value.length === 6 && document.getElementById("password").value.length >= 8) {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  setCookie("username", username);
  setCookie("password", password);

  activate(msgSuccess);

  setTimeout(function() {
    window.location.href = '../login/login.html';
  }, 2000);
  }
}

// alert
const divMessage = document.querySelector(".alert");

const msgSuccess = "Cadastro efetuado com sucesso!";

function activate(msg) {
  const message = document.createElement("div");
  message.classList.add("messageSuccess");
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