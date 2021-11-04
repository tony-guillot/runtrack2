<?php

 $num= 2; // 2 est le plus petit nombre premier
 $count= 0;
 while($num <= 1000){
        $count= 0;
    for( $i = 1; $i <= $num; $i++){
        if(($num % $i)==0){ // si la division des deux variable = 0 alors = pas nombre premier count+

         $count++;
         }
     } if ($count < 3){ // si la valeur de count est inferieur à 3 c'est un chiffre premier alors    echo $num 

        echo $num . " <br />";
     }
     $num++;
 }  

