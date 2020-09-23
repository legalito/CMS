<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Article</title>
</head>
<body class="body">
  <div class="nav">
    <img src="../../photos/grandmere_cafe_logo.png" class="logo" alt="Logo">

  </div>
  <div class="Art_En_Cour"> en cour </div>
  <div class="List">
    <p>Article ajouter récemment</p>

  </div>
  <div class="Art">
    <div class="TitreArticle">
      <h2>Titre :<?php
        include_once ("../db.php");
        $result = get_informations_from_db('SELECT * FROM articles');
        echo $result['titre'];
        ?> </h2>

    </div>
    <img class="photo">
    <div class="resume"><?php echo $result['resume']; ?></div>



  </div>

<div class="footer"> footer </div>
</body>
</html>
