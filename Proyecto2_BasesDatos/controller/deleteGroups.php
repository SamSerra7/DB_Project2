<?php

//llama al modelo y la vista
require_once '../model/groups_model.php';

$id = $_GET["Id"];

$group = new Groups_model();
$group->delete_groups($id);

require_once '../view/consultGroup.php';
