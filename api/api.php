<!-- andrò a inserire la parte dove metterò il url per realizzare la chiamata API !-->


<?php
header('Content-Type: application/json');

$albums = [
    ['title' => 'Album 1', 'artist' => 'Artista 1'],
    ['title' => 'Album 1', 'artist' => 'Artista 1'],
    ['title' => 'Album 1', 'artist' => 'Artista 1'],
    ['title' => 'Album 1', 'artist' => 'Artista 1'],
    ['title' => 'Album 1', 'artist' => 'Artista 1'],
    ['title' => 'Album 1', 'artist' => 'Artista 1'],
];

$albumsJson = file_get_contents('albums.json');
echo $albumsJson;


?>

