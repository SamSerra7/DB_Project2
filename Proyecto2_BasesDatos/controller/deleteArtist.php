<?php

//llama al modelo y la vista
require_once '../model/groups_model.php';

$id = $_GET["Id"];

$group = new Groups_model();
$group->delete_artist($id);

require_once '../view/consultArtist.php';
