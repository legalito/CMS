<?php

$db = new PDO("mysql:host=localhost;dbname=id15386017_bdd", "id15386017_admin", "7fFCn@29cN^pAATy");

function get_informations_from_db($sql){
  $image = $GLOBALS['db']->query($sql);
  return $image->fetch();
}

?>
