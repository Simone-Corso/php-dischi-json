


<?php
header('Content-Type: application/json');

$albumsJson = file_get_contents('albums.json');
echo $albumsJson;

$decodedJson = (!is_null($jsonData)) ? json_decode($jsonData, true) : [];


echo json_encode(($decodedJson));


?>

