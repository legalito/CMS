<?php

include_once('../db.php');

$s = get_unique_infos("SELECT * FROM articles");
echo $s['titre'];

?>
