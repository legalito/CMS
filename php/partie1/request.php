<?php

  $db = new PDO("$server:host=$host;dbname = $base", $user, $pass);

  $titre = $db->query('SELECT * FROM jeux_video');


