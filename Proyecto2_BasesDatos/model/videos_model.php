<?php

class Videos_model {

    private $db;
    private $videos;

    public function __construct() {

        require_once('../model/connect.php');
        $this->db = Connect::conection();
        $this->videos = array();
    }

    public function get_all_videos() {

        $query = $this->db->query("SELECT * FROM VIDEOS");

        while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
            $this->videos[] = $rows;
        }

        return $this->videos;
    }

    
    public function insert_video($url,$name, $g_id, $a_id,$genre) {
        try {
            $query1 = "INSERT INTO VIDEOS (url, name, group_id, author_id,genre)  VALUES (:url,:name,:g_id,:a_id,:genre)";
            $result1 = $this->db->prepare($query1);
            $result1->execute(array(":url" => $url, ":name" => $name, ":g_id" => $g_id, ":a_id" => $a_id, ":genre" => $genre));
            
            $result1->closeCursor();
        } catch (Exception $e) {
            die("Error: " . $e->getMessage() ."   <br/>Line :". $e->getLine());
        }
    }

    public function delete_video($url) {

        $query = "DELETE FROM VIDEOS  WHERE url = '$url' ";
        $this->db->query($query);

        header("Location:../view/consultVideo.php");
    }


    public function update_video($url,$name, $g_id, $a_id,$genre) {
        $query = "UPDATE VIDEOS SET name=:name, a_id=:a_id, g_id=:g_id, genre=:genre  WHERE url=:url ";
        $result = $this->db->prepare($query);
        $result->execute(array(":name" => $name, ":g_id" => $g_id, ":a_id" => $a_id, ":url" => $url, ":genre" => $genre));
        $result->closeCursor();

        header("Location:../view/consultVideo.php");
    }

}
