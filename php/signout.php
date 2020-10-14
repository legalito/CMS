<?php
  session_start();
  $_SESSION['mail'] = "";
  $_SESSION['first_name'] = "";
  $_SESSION['last_name'] = "";
  $_SESSION['birthday_date'] = "";
  $_SESSION = null;

  header('Location:partie1/index.php');

  ?>

