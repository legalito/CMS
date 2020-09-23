<?php

if(!empty($_GET['mail']) && !empty($_GET['password'])){

  session_start();
  $_SESSION['mail'] = $_GET['mail'];
  $_SESSION['password'] = $_GET['password'];
  $_SESSION['name'] =

  header('Location: ../partie4/home.php');
  exit();

}
?>
