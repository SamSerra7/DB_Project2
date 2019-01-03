<?php



//llama al modelo y la vista
require_once '../model/videos_model.php';

$url = $_POST["url"];
$name = $_POST["name"];
$genre = $_POST["genre"];
$a_id = $_POST["artist"];
$g_id = $_POST["groups"];

$video = new Videos_model();
$video->update_video($url, $name, $g_id, $a_id, $genre);


require_once '../view/consultVideo.php';
