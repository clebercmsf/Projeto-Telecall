let search = document.getElementById('search');

  search.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      searchData();
    }
  });

  function searchData() {
    window.location = `sistema.php?search=${search.value}`;
  }

  function logout() {
    window.location.href = '../crud/sair.php';
  }