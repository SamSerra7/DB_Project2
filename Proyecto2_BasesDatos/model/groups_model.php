<?php

class Groups_model {

    private $db;
    private $groups;

    public function __construct() {

        require_once('../model/connect.php');
        $this->db = Connect::conection();
        $this->groups = array();
    }

    public function get_all_groups() {

        $query = $this->db->query("SELECT * FROM GROUPS");

        while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
            $this->groups[] = $rows;
        }

        return $this->groups;
    }

    public function get_authors() {

        $query = $this->db->query("SELECT * FROM ARTISTS");

        while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
            $this->artists[] = $rows;
        }

        return $this->artists;
    }
    
    /*
    public function get_artists($id) {

        $query = $this->db->query("SELECT * FROM ARTISTS WHERE group_id = $id");

        while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
            $this->artists[] = $rows;
        }

        return $this->artists;
    }*/

    public function insert_groups($name, $fdate, $country) {
        try {
            $query1 = "INSERT INTO GROUPS (name, fundation_date, country)  VALUES (:name,:fdate,:country)";
            $result1 = $this->db->prepare($query1);
            $result1->execute(array(":name" => $name, ":fdate" => $fdate, ":country" => $country));
            
            $result1->closeCursor();
        } catch (Exception $e) {
            die("Error: " . $e->getMessage() ."   line :". $e->getLine());
        }
    }

    public function insert_artists_by_groups($artistList) {
        $all = $this->get_all_groups();
        for ($index = 0; $index < count($all); $index++) {
            $last_id = $all[$index];
        }
        $id = $last_id["group_id"];
        try {

            for ($i = 0; $i < count($artistList); $i++) {
                $query = "INSERT INTO ARTISTS (group_id, author_id)  
                                VALUES ('$id', '$artistList[$i]')";
                $result = $this->db->prepare($query);
                $result->execute();

            }
            
            $result->closeCursor();
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function delete_groups($id) {

        $query = "DELETE FROM GROUPS "
                . "WHERE group_id = '$id' ";
        $this->db->query($query);

        header("Location:../view/consultGroup.php");
    }
    
    
    public function delete_artist($id) {

        $query = "DELETE FROM ARTISTS "
                . "WHERE group_id = '$id' ";
        $this->db->query($query);

        header("Location:../view/consultGroup.php");
    }

    public function update_groups($id,$name, $fdate, $country) {
        $query = "UPDATE GROUPS SET name=:name, country=:country, fundation_date=:fdate  WHERE group_id=:id ";
        $result = $this->db->prepare($query);
        $result->execute(array(":name" => $name, ":country" => $country, ":fdate" => $fdate, ":id" => $id));
        $result->closeCursor();

        header("Location:../view/consultGroup.php");
    }

}
