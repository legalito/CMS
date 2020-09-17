<?php
header('content-type: text/css');
ob_start('ob_gzhandler');
header('Cache-Control: max-age=31536000, must-revalidate');
// etc.
?>

.fullscreen{
  display: grid;
  grid-template-columns: 20vw 10vw auto 10vw;
  grid-template-rows: 5vw auto 5vw;
  font: 1rem 'Fira Sans', sans-serif;
}

.nav{
  grid-column: 1/-1;
  grid-row: 1;
  background-color: saddlebrown;
}

.containerPreview{
  grid-column: 1;
  grid-row: 2;
  border : solid 2px saddlebrown;
  border-bottom: none;
  border-top: none;

}

.containerPreview p{
  vertical-align: center;
  text-align: center;
}

.footer{
  grid-row: 3;
  grid-column: 1/-1;
  background-color: saddlebrown;
  font: 1rem 'Fira Sans', sans-serif;
  color: white;
  vertical-align: center;
  text-align: center;
  horiz-align: center;
  padding-top: 1vw;
}

.containerArticles{
  grid-column: 3;
  grid-row: 2;
}

label {
  display: block;
  font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
  margin: .4rem 0;
}
