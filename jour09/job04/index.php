<?php

$bdd =  mysqli_connect ("localhost", "root","","jour08");

$req = mysqli_query($bdd, "SELECT * FROM etudiants WHERE prenom like 't%' ");

$res= mysqli_fetch_all($req, MYSQLI_ASSOC);







var_dump($res);



?>

<table border = 1>

    <thead>
        
            
        <?php  
        foreach($res[0] as $key => $value){  
        echo "<th>$key</th>";}
        ?> 

    <tbody>

        <?php  
        foreach($res[0] as $key => $value){
        echo "<td>$value</td>";}
        ?>   
          <tr> 

        


        <?php
        foreach($res[1] as $key => $value){
            echo "<td>$value</td>";}
        ?>
        </tr> 
        
       
       
         
    </tbody>
         
    </thead>
</table>    



