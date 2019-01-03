<?php

class Playlist_model {

    private $db;
    private $playlists;

    public function __construct() {

        require_once('../model/connect.php');
        $this->db = Connect::conection();
        $this->playlists = array();
    }

    public function get_all_playlists() {

        $query = $this->db->query("SELECT * FROM PLAYLIST" );

        while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
            $this->playlists[] = $rows;
        }

        return $this->playlists;
    }

    

    public function insert_playlists($name,$video) {
        try {
            $query1 = "INSERT INTO PLAYLIST (name, url)  VALUES (:name,:video)";
            $result1 = $this->db->prepare($query1);
            $result1->execute(array(":name" => $name, ":video" => $video));
            
            $result1->closeCursor();
        } catch (Exception $e) {
            die("Error: " . $e->getMessage() ."   line :". $e->getLine());
        }
    }

    

    public function delete_playlist($name) {

        $query = "DELETE FROM `playlist` "
                . "WHERE name = '$name' ";
        $this->db->query($query);

        //header("Location:../view/consultPlaylist.php");
    }
    

    public function update_playlist($name, $url) {
        $query = "UPDATE GROUPS SET url=:url  WHERE name=:name ";
        $result = $this->db->prepare($query);
        $result->execute(array(":name" => $name, ":url" => $url));
        $result->closeCursor();

        header("Location:../view/consultPlaylist.php");
    }

}
