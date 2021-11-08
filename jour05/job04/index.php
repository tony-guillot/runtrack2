<?php




function calcule($a,$b, $operation){ // on definit les paramètres de la fontion 

        if($operation == "+"){

            return ($a + $b);
        }
        elseif ($operation == '-')
        return ($a - $b);
        
        elseif ($operation == '/') // on definit  les condition de calcul avec le paramètre opérateur 
        return ($a / $b);

        elseif($operation == '*')
        return ($a * $b);

        elseif($operation == '%')
        return ($a % $b);
        

        
    }

$calcule = calcule(12, 15, '*'); // ont met en troisième parametre l'opérateur que l'on veut et on definit une valeur à $a et $b 

echo $calcule;


