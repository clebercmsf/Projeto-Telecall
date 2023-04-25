const darkModeToggle = document.querySelector("#dark-mode-toggle");

darkModeToggle.addEventListener("click", function() {
  document.body.classList.toggle("dark-mode");
  if(document.body.classList.contains("dark-mode")) {
    darkModeToggle.textContent = "Tema Claro";
  } else {
    darkModeToggle.textContent = "Tema Escuro";
  }
})