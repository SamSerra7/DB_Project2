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
    
    
    $id = $_POST["cedula"];
    $name = $_POST["nombre"];
    $mname = $_POST["p_apellido"];
    $lname = $_POST["s_apellido"];
    $aname = $_POST["nombre_artistico"];
    $nationality = $_POST["nacionalidad"];
    $date_of_birth = $_POST["fecha_nacimiento"];

    $author = new Authors_model();
    $author->insert_authors($id, $name, $mname, $lname, $aname, $nationality, $dobirth);


    require_once '../view/consultAuthor.php';



    