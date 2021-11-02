
<?php
   


$soleil = true;
$jour = "mardi";
$semaine = 3.5;
$date= 2;
$table = ["type","nom","valeur"];

?>

<table border = 1>

<thead>
    <tr>
    <td><?php echo $table[0];?></td>
    <td><?php echo $table[1]; ?></td>
    <td><?php echo $table[2]; ?></td>
    </tr>

    </thead>

    <tbody>
    <tr>
    <td> <?php echo gettype($soleil);?></td>
    <td><?php echo '$soleil';  ?></td>
    <td><?php echo $soleil; ?></td>
    </tr>

    <tr>
    <td> <?php echo gettype($jour);?></td>
    <td><?php echo '$jour';  ?></td>
    <td><?php echo $jour; ?></td>
    </tr>

    <tr>
    <td> <?php echo gettype($semaine);?></td>
    <td><?php echo '$semaine';  ?></td>
    <td><?php echo $semaine; ?></td>
    </tr>

    <tr>
    <td> <?php echo gettype($date);?></td>
    <td><?php echo '$date';  ?></td>
    <td><?php echo $date; ?></td>
    </tr>
    </table>





