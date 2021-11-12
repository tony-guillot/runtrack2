<?php


$bdd = mysqli_connect("localhost", 'root','','jour08');

$req = mysqli_query($bdd, "SELECT * FROM salles ORDER BY capacite ASC");

$res= mysqli_fetch_all($req, MYSQLI_ASSOC);





var_dump($res);





?>



<table border="1"> 
    <thead>
            <?php foreach($res[0] as $key => $value){
                        echo "<th>$key</th>";
                    }
?>

    </thead>
    <tbody>
        <tr>
            <?php foreach($res[0] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
        <tbody>
        <tr>
            <?php foreach($res[1] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
            <?php foreach($res[2] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
            <?php foreach($res[3] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
            <?php foreach($res[4] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
            <?php foreach($res[5] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>