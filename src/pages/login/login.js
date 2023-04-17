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