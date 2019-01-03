<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Video</title>
        <style>
            td{
                border: 4px dotted gainsboro;
            }
            a.button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;

                text-decoration: none;
                color: initial;
            }
        </style>
    </head>
    <body>
         
        <table>
        
            <tr>
            <td>Nombre del video</td>
            <td>G&eacute;nero</td>
            <td>url</td>
            <td>Artista</td>
            <td>Grupo</td>
            <td>Eliminar</td>
            <td>Modificar</td>
            </tr>
            
            
            <?php
                
                
                foreach ($videoList as $register){
                  $url = $register["url"]; 
                  $name = $register["name"]; 
                  $genre = $register["genre"]; 
                  $g_id = $register["group_id"];
                  $a_id = $register["author_id"];
                  
                  
                  
                  echo "<tr><td>" . $name ."</td>";  
                  echo "<td>" . $genre ."</td>";
                  echo "<td>" . $url ."</td>";
                  echo "<td>" . $a_id ."</td>";
                  echo "<td>" . $g_id ."</td>";
                  echo '<td><a href="../controller/deleteVideos.php?URL='.$url.'"   id="eliminar" class="button">Eliminar</a></td>';
                  echo '<td><a href="../view/updateVideo.php?url='.$url
                                                            .' & genre='.$genre
                                                            .' & name='.$name
                                                            .' & group_id='.$g_id
                                                            .' & author_id='.$a_id 
                                                            .'" id="modificar" class="button">Modificar</a></td></tr>';
                }   

            ?>
            
        </table>
    </body>
</html>
