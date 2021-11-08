


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$str = 'On n est pas le meilleur quand on le croit mais quand on le sait.';

$dic = ["a","e","i","o","u","y"] ;
$dic1 = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z"];


?>
<table border = 1>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>

<?php 

   for($i = 0; isset($str[$i]); $i++){

        for($a = 0; isset($dic[$a]); $a++){
            
            if($str[$i] == $dic[$a]){
                echo $str[$i] . '<br>';
            }
        }
   }

     ?> 
        </td>
   
        <td> 
            <?php 
        
        for($b = 0; isset($str[$b]); $b++){

            for($j = 0; isset($dic[$j]); $j++){
                
                if($str[$b] == $dic[$j]){
                    echo $str[$b] . '<br>';
                }
            }
       }

            ?>
    </td>








    </tbody>


</table>
</body>
</html>