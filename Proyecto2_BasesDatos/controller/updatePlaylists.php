<?php



//llama al modelo y la vista
require_once '../model/groups_model.php';

$id = $_POST["Id"];
$name = $_POST["nombre"];
$country = $_POST["pais"];
$fdate = $_POST["fecha_fund"];

$groups = new Groups_model();
$groups->update_groups($id,$name, $fdate, $country);

require_once '../view/consultGroup.php';
