<?php
  session_start();
  $_SESSION['mail'] = "";
  $_SESSION['password'];

  $g = "'";
  echo 'Vous êtes déconnecté ! Redirection vers la page d'. "'". 'accueil...';

  echo '<br>';
  echo '<input type="button" value="Accueil"
    onclick="window.location=' . $g . 'partie1/index.php' . $g . '"/>';

  ?>

