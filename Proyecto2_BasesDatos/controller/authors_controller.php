<?php

//llama al modelo y la vista
require_once '../model/authors_model.php';

$author = new Authors_model();
$authorsList  = $author->get_authors();


require_once '../view/authors_view.php';

