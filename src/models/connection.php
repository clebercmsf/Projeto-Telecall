<?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $bd = "db_telecall";

  if ( $conn = mysqli_connect($server, $user, $pass, $bd) ) {
    // echo "Conectado!";
  } else {
    echo "Erro!";
  }
?>