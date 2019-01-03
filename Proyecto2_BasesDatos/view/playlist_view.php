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
            <td>Nombre de la lista de Reproducción</td>
            <td>Videos</td>
            <td>Eliminar</td>
            </tr>
            
            
            <?php
                
                foreach ($playlistList as $register){
                    $name = $register["name"];
                    $url = $register["url"];
                    
                    
                  
                    echo "<tr><td>" . $name ."</td>";  
                    echo "<td>" . $url ."</td>";
                    echo '<td><a href="../controller/deletePlaylist.php?nombre='.$name.'" id="eliminar" class="button">Eliminar</a></td></tr>';
                }   

            ?>
            
        </table>
    </body>
</html>
