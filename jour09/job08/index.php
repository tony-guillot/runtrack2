<?php


$bdd = mysqli_connect("localhost", 'root','','jour08');

$req = mysqli_query($bdd, "SELECT SUM(capacite) FROM salles");

$res= mysqli_fetch_all($req, MYSQLI_ASSOC);





var_dump($res);


?>


<table border="1"> 
    <thead>
     <th>capacite_totale</th>

    </thead>
    <tbody>
        <tr>
            <?php foreach($res[0] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
        <tbody>