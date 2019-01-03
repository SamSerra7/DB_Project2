<style>
    h1{
                background: yellowgreen;
                alignment-adjust: central;
                animation: infinite ease-in-out;
                
            }
</style>
<?php
    
    //llama al modelo y la vista
    require_once '../model/authors_model.php';
    
    
    $id = $_GET["Id"];

    $author = new Authors_model();
    $author->delete_authors($id);


    require_once '../view/consultAuthor.php';



    