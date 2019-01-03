<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Artistas por Grupo</title>
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
        
            <tr><td>Id del grupo</td>
            <td>Artistas miembro</td>
            <td>Eliminar</td>
            
            
            <?php
                
                
                foreach ($groupsList as $register){
                    $id_g = $register["group_id"]; 
                  
                        foreach ($artistsList as $artistsRegister){
                            if($register["group_id"] == $artistsRegister["group_id"]){
                                foreach ($authorsList as $authorsRegister){
                                    if($artistsRegister["author_id"] == $authorsRegister["author_id"]){
                                         
                                        echo "<tr><td>" . $id_g ."</td>";  
                                        echo "<td>" . $authorsRegister["artistic_name"] ."</td>";
                                        echo '<td><a href="../controller/deleteArtist.php?Id='.$artistsRegister["author_id"].' id="eliminar" class="button">Eliminar</a></td></tr>';
                                    }
                                }
                            }   
                        }
                
                  
                  
                }   

            ?>
            
        </table>
    </body>
</html>
