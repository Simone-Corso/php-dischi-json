<!-- andrò a inserire la parte dove metterò il url per realizzare la chiamata API !-->


<?php
header('Content-Type: application/json');

$albumsJson = file_get_contents('albums.json');
echo $albumsJson;
?>

