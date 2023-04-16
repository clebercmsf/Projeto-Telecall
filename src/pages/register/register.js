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
    cellInput.value += "(";
  } else if (cellLength === 3) {
    cellInput.value += ")";
  } else if (cellLength === 9) {
    cellInput.value += "-";
  }
}); 
// (21)7670-5775

// tellNumber input format;
const tellInput = document.querySelector("#t-number");

tellInput.addEventListener("keypress", () => {
  let tellLength = tellInput.value.length;

  if (tellLength === 0) {
    tellInput.value += "(";
  } else if (tellLength === 3) {
    tellInput.value += ")";
  } else if (tellLength === 8) {
    tellInput.value += "-";
  }
}); 