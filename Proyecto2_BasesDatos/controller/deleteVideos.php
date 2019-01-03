<?php
 
    //llama al modelo y la vista
    require_once '../model/videos_model.php';
    
    
    $url = $_GET["URL"];

    $video = new Videos_model();
    $video->delete_video($url);


    require_once '../view/consultVideo.php';
