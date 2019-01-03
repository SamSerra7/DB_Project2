<?php

 
    //llama al modelo y la vista
    require_once '../model/playlist_model.php';
    
    
    $name = $_GET["nombre"];

    $playlist = new Playlist_model();
    $playlist->delete_playlist($name);


    require_once '../view/consultPlaylist.php';
