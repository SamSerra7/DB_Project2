<?php


//llama al modelo y la vista
require_once '../model/groups_model.php';


$name = $_POST["nombre"];
$country = $_POST["pais"];
$fdate = $_POST["fecha_origen"];
$artistList = $_POST["artists"];

$groups = new Groups_model();
$groups->insert_groups($name, $fdate, $country);
$groups->insert_artists_by_groups($artistList);

require_once '../view/consultGroup.php';
