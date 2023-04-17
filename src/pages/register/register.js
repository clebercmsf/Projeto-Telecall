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
  field[index].style.border = "2px solid #5398C9";
  spans[index].style.visibility = "visible";
}

function removeError(index) {
  field[index].style.border = "";
  spans[index].style.visibility = "hidden";
}

function nameValidator() {
  if(field[0].value.length < 15 || field[0].value.length > 60) {
    setError(0);
  } else {
    removeError(0);
  }
}

function userValidator() {
  if(!userRejex.test(field[1].value)) {
    setError(1);
  } else {
    removeError(1);
  }
}

function passwordValidator() {
  if(!passwordRejex.test(field[2].value)) {
    setError(2);
  } else {
    removeError(2);
  }
}

function passwordConfirm() {
  if(field[2].value != field[3].value) {
    setError(3);
  } else {
    removeError(3);
  }
}

// function saveData() {
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;

//   var dadosSalvos = JSON.parse(localStorage.getItem("dados"));

//   var dadosUsuario = [];

//   // Se já houver dados salvos, adiciona-os ao array
//   if (dadosSalvos) {
//     dadosUsuario = dadosSalvos;
//   }

//   // Adiciona os novos dados do usuário ao array
//   dadosUsuario.push({ usuario: usuario, senha: senha });

//   // Salva o array atualizado no localStorage
//   localStorage.setItem("dados", JSON.stringify(dadosUsuario));
// }

function saveData() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  var data = JSON.parse(localStorage.getItem("savedData"));

  if(data == null) {
    localStorage.setItem("dataSaved", "[]");
    data = [];
  }

  var register = {
    user: username.value,
    pass: password.value
  }

  data.push(register);

  localStorage.setItem("dataSaved", JSON.stringify(data));
  alert("Cadastro efetuado com sucesso!");

  username.value = "";
  password.value = "";

  window.location.href = "/src/pages/login/login.html";

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
//

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