<?php

//llama al modelo y la vista
require_once '../model/videos_model.php';

$video = new Videos_model();
$videoList  = $video->get_all_videos();


require_once '../view/video_view.php';
