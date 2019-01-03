<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Grupos</title>
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
            <td>Nombre del grupo</td>
            <td>País de origen</td>
            <td>Fecha de fundación</td>
            <td>Artistas miembro</td>
            <td>Eliminar</td>
            <td>Modificar</td></tr>
            
            
            <?php
                
                
                foreach ($groupsList as $register){
                  $id_g = $register["group_id"]; 
                  $name_g = $register["name"]; 
                  $country = $register["country"];
                  $f_date = $register["fundation_date"];
                  $allAuthorsbyGroup = " ";
                  
                  
                        foreach ($artistsList as $artistsRegister){
                            if($register["group_id"] == $artistsRegister["group_id"]){
                                foreach ($authorsList as $authorsRegister){
                                    if($artistsRegister["author_id"] == $authorsRegister["author_id"]){
                                        $allAuthorsbyGroup = $allAuthorsbyGroup . "<br/>" . $authorsRegister["artistic_name"] ;
                                    }
                                }
                            }   
                        }
                
                  
                  echo "<tr><td>" . $id_g ."</td>";  
                  echo "<td>" . $name_g ."</td>";
                  echo "<td>" . $country ."</td>";
                  echo "<td>" . $f_date ."</td>";
                  echo "<td>" . $allAuthorsbyGroup ."</td>";
                  echo '<td><a href="../controller/deleteGroups.php?Id='.$id_g.' id="eliminar" class="button">Eliminar</a></td>';
                  echo '<td><a href="../view/updateGroup.php?Id='.$id_g
                                                            .' & name='.$name_g
                                                            .' & country='.$country
                                                            .' & fund_date='.$f_date
                          .'" id="modificar" class="button">Modificar</a></td></tr>';
                }   

            ?>
            
        </table>
    </body>
</html>
