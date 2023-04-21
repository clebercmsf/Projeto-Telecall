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

  const user = document.querySelector("#username").value;
  const password = document.querySelector("#password").value;

  // Armazenando os dados no localStorage
  localStorage.setItem("user", user);
  localStorage.setItem("password", password);

  // Redirecionando o usuário para uma página de sucesso (opcional)
  window.location.href = "../login/login.html";
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
