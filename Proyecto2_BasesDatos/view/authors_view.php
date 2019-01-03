<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autores</title>
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
        
            <tr><td>Id del autor</td>
            <td>Nombre del autor</td>
            <td>Primer apellido del autor</td>
            <td>Segundo apellido del autor</td>
            <td>Nombre Artístico del autor</td>
            <td>Nacionalidad del autor</td>
            <td>Fecha de nacimiento del autor</td>
            <td>Eliminar</td>
            <td>Modificar</td></tr>
            
            
            <?php
                foreach ($authorsList as $register){
                  $id_a = $register["author_id"]; 
                  $name_a = $register["first_name"];
                  $mname_a = $register["middle_name"];
                  $lname_a = $register["last_name"];
                  $aname_a = $register["artistic_name"]; 
                  $nation_a = $register["nationality"];
                  $dobirth_a = $register["date_of_bith"];
                  
                  echo "<tr><td>" . $id_a ."</td>";  
                  echo "<td>" . $name_a ."</td>";
                  echo "<td>" . $mname_a ."</td>";
                  echo "<td>" . $lname_a ."</td>";
                  echo "<td>" . $aname_a ."</td>";
                  echo "<td>" . $nation_a ."</td>";
                  echo "<td>" . $dobirth_a ."</td>";
                  echo '<td><a href="../controller/deleteAuthors.php?Id='.$id_a.' id="eliminar" class="button">Eliminar</a></td>';
                  echo '<td><a href="../view/updateAuthor.php?Id='.$id_a
                                                            .' & name='.$name_a
                                                            .' & mname='.$mname_a
                                                            .' & lname='.$lname_a
                                                            .' & aname='.$aname_a
                                                            .' & nationality='.$nation_a
                                                            .' & date_of_birth='.$dobirth_a
                          .'" id="modificar" class="button">Modificar</a></td></tr>';
                }   

            ?>
            
        </table>
    </body>
</html>
