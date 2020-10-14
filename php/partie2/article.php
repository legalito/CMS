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
    <p>Article ajoute récemment</p>

  </div>
  <div class="Art">
    <div class="art-info">

        <h2><?php
          include_once ("../db.php");
          $result = get_informations_from_db("SELECT * FROM articles WHERE Id = '".$_GET['id_article']."';" );
          echo $result['titre'];
          ?> </h2>
      <p class="art-notes">évaluation de l'article : <?php echo $result['notes'] ?></p>
      <p class="art-resume"><?php echo $result['resume']; ?></p>
      <p class="art-prix">Prix: <?php echo $result['prix']; ?> Livraison GRATUITE en France métropolitaine</p>

    </div>

    <img class="art-img" src="../../photos/<?php echo $result['Id'] ?>.jpg" style="width: 25vw;" >

  </div>

<div class="footer"> footer </div>

<script>
  if (<?php echo $result['notes']?>== 0){

  }



</script>
</body>
</html>
