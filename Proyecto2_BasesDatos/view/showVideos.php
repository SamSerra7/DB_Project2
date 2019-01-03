<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reproductor</title>
    </head>
    <body>
        <a href="../index.php"><h1>Volver al inicio</h1></a>
        <?php
            
            //llama al modelo y la vista
            require_once '../model/videos_model.php';
            require_once '../model/groups_model.php';
            require_once '../model/authors_model.php';
            
            $video = new Videos_model();
            $videoList  = $video->get_all_videos();
            
            function getAuthor($author){
                
                $auth = new Authors_model();
                $authList =$auth->get_authors();
                
                $str = " ";
                foreach ($authList as $value) {
                    if($author == $value["author_id"]){
                        $str = $value["artistic_name"];
                    }
                }
                return $str;
            }
            function getGroup($group){
                
                $groups = new Groups_model();
                $groupsList = $groups->get_all_groups();
                
                $str = " ";
                foreach ($groupsList as $value) {
                    if($group == $value["group_id"]){
                        $str = $value["name"];
                    }
                }
                return $str;
            }

            foreach ($videoList as $value) {
                echo '<h2>Artista/Grupo -  '.getAuthor($value["author_id"]).'  '.getGroup($value["group_id"]).'</h2>';
                echo '<iframe width="420" height="345" src="'.$value["url"].'"></iframe>';
            }
            
        ?>
        
        
    </body>
</html>
