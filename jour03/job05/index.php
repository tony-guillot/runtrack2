


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

<?php $i=0;

    while(isset($str[$i])){
        
        $a = 0;

        while(isset($dic[$a])){

            if($str[$i] == $dic[$a])
            echo $str[$i] . '<br>'; 
            $a++;
        }
        $i++;

    } ?> 
        </td>
   


        <td> 
            <?php $x = 0;
        
        while(isset($str[$x])){

            $j = 0;

            while(isset($dic1[$j])){
                if($str[$x] == $dic1[$j])
                echo $str[$x] . '<br>';
                $j++;
            }
            $x++;
        }

            ?>
    </td>








    </tbody>


</table>
</body>
</html>