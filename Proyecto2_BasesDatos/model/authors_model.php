<?php

    class Authors_model{
        
        private $db;
        private $authors;
        
        public function __construct() {
            
            require_once('../model/connect.php');
            $this->db = Connect::conection();
            $this->authors = array();
            
        }
        
        public function get_authors(){
            
            $query  = $this->db->query("SELECT * FROM AUTHOR");
            
            while($rows = $query->fetch(PDO::FETCH_ASSOC)){
                $this->authors[] = $rows;
            }
            
            return $this->authors;
        }
        
        public function insert_authors($id,$name,$mname,$lname,$aname,$nationality,$dobirth){
            try{
                $query = "INSERT INTO AUTHOR (author_id,first_name,middle_name,last_name,artistic_name,nationality,date_of_bith)"
                        . " VALUES (:id,:name,:mname,:lname,:aname,:nationality,:dobirth)";
                $result = $this->db->prepare($query);
                $result->execute(array(":id"=>$id,":name"=>$name,":mname"=>$mname,":lname"=>$lname,
                                         ":aname"=>$aname,":nationality"=>$nationality,":dobirth"=>$dobirth));
                $result->closeCursor();

                return '<h1>Registro Insertado</h1>';
            } 
            catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }
        
        public function delete_authors($id){
          
            $query = "DELETE FROM AUTHOR "
                        . "WHERE author_id = '$id' ";
            $this->db->query($query);
            
            header("Location:../view/consultAuthor.php");
            
        }
        
        
        public function upadate_authors($id,$name,$mname,$lname,$aname,$nationality,$dobirth){
            $query = "UPDATE AUTHOR SET first_name=:name, middle_name=:mname, "
                    . "last_name=:lname, artistic_name=:aname, nationality=:nationality, date_of_bith=:dobirth "
                    . " WHERE author_id=:id ";
            $result = $this->db->prepare($query);
            $result->execute(array(":id"=>$id,":name"=>$name,":mname"=>$mname,":lname"=>$lname,
                                     ":aname"=>$aname,":nationality"=>$nationality,":dobirth"=>$dobirth));
            $result->closeCursor();
            
            header("Location:../view/consultAuthor.php");
        }
    }