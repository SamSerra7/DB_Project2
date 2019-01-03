<?php

//llama al modelo y la vista
require_once '../model/groups_model.php';
require_once '../model/authors_model.php';

$groups = new Groups_model();
$groupsList = $groups->get_all_groups();
$artistsList  = $groups->get_authors();

$author = new Authors_model();
$authorsList  = $author->get_authors();




require_once '../view/groups_view.php';

