<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="../style_commun.css">
  <title>Connexion au site</title>
  <script type="text/javascript">
    function connection(){
      var mail = document.getElementById('mail').value;
      var pass = document.getElementById('password').value;

      if(mail != "" && pass != ""){
        document.getElementById('login_form').submit();
      }else{
        document.getElementById('error_message').innerHTML = 'Veuillez remplir les champs !';
        document.getElementById('error_message').style = "color:red;";
      }
    }
  </script>
</head>
<body>
<div class="fullscreen">
  <div class="nav"> </div>
  <div class="login_form">
    <form id="login_form" action="signup.php" method="get">
      <h1>Se connecter</h1>
      <label>Adresse mail</label><br>
      <input name="mail" id="mail" type="text" placeholder="example@example.fr"><br>
      <label>Mot de passe</label><br>
      <input name="password" id="password" type="password" placeholder="mot de passe"><br><br>
      <input type="button" value="Se connecter" onclick="connection();"><br><br>

      <label id="error_message"></label><br><br>
    </form>
  </div>
  <div class="footer"> 2020. Tous les droits sont réservés . Tous les logos et marques de commerce appartiennent à leurs propriétaires respectifs. </div>
</div>

</body>
</html>
