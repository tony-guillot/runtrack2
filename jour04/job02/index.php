<?php



?>


<form action="#" method="get">

    <label for="nom"> Nom : </label>
    <input type="text" name="nom">
    <label for="prenom">prenom :</label>
    <input type="text" name="prenom">
    <input type="submit" value='valider'>

</form>

<table border 1 >

<thead>
    <tr>
        <td>Arguments</td>
        <td>Valeurs</td>
    </tr>
</thead>

    <tbody>
        <tr>

        <td><?php 
        


        foreach($_GET as $key => $val){
            
            if($_GET['nom'] == $val){
            
            echo $key;
            }
        }
        
        ?>
     </td>
        <td><?php
            
            foreach($_GET as $key => $val){
            if($_GET['nom'] === $val){

            echo $val;

            }
        }
            ?></td>
        </tr>

        <td><?php 

            foreach( $_GET as $key1 => $val1)
            

            if($_GET['prenom'] == $val1){

            echo $key1;

        }

        ?>
            </td>
            
        <td>
            <?php 

            foreach($_GET as $key1 => $val1){
            
            if($_GET['prenom'] == $val1){

            echo $val1;
            }
        }
            ?>
        </td>
    </tbody>


</table>
