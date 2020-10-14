<?php


if(!empty($_GET['mail']) && !empty($_GET['password'])){

  $user_mail = $_GET['mail'];
  $user_password = $_GET['password'];

  include_once ('../db.php');
  $sql = "SELECT * FROM users WHERE mail='" . $user_mail . "';";
  $request = get_informations_from_db($sql);

  if(empty($request['mail'])){
    echo 'Redirection erreur !';
    header('Location:../partie3/login.php?id_error=2');
    exit(0);
  }

  if($user_mail == $request['mail'] && $user_password == $request['password']){
    $user_first_name = $request['first_name'];
    $user_last_name = $request['last_name'];
    session_start();
    $_SESSION['mail'] = $user_mail;
    $_SESSION['first_name'] = $user_first_name;
    $_SESSION['last_name'] = $user_last_name;



    header('Location:../partie4/home.php');
    exit();
  }else{
    header('Location:../partie3/login.php?id_error=1');
  }

}
?>
