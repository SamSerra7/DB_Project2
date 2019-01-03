<?php

//llama al modelo y la vista
require_once '../model/playlist_model.php';
require_once '../model/videos_model.php';

$playlist = new Playlist_model();
$playlistList  = $playlist->get_all_playlists();


require_once '../view/playlist_view.php';
