<?php



?>


<form action="#" method="post">

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
        foreach($_POST as $key => $val){
            
            if($_POST['nom'] == $val){
            
            echo $key;
            }
        }?>

     </td>
        <td><?php
            
            foreach($_POST as $key => $val){
            if($_POST['nom'] === $val){

            echo $val;

            }
        }?></td>

        </tr>

        <td><?php 
        foreach( $_POST as $key1 => $val1)
            

            if($_POST['prenom'] == $val1){

            echo $key1;

        }

        ?>
            </td>
            
        <td>
            <?php 

            foreach($_POST as $key1 => $val1){
            
            if($_POST['prenom'] == $val1){

            echo $val1;
            }
        }
            ?>
        </td>
    </tbody>


</table>
