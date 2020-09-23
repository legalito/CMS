<?php

include_once('../db.php');

$s = get_informations_from_db("SELECT * FROM articles");
echo $s['titre'];

?>
