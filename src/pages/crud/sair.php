<?php
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  unset($_SESSION['profile']);
  header('Location: ../home/home.php');
?>