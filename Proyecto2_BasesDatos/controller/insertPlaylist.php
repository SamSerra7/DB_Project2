<?php


//llama al modelo y la vista
require_once '../model/playlist_model.php';


$name = $_POST["nombre"];
$videos = $_POST["videos"];

$playlist = new Playlist_model();

foreach ($videos as $video) {
    $playlist->insert_playlists($name, $video);
}



require_once '../view/consultPlaylist.php';
