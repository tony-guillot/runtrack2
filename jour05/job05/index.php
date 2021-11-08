<?php



function occurences($str,$char){ // definit les paramètre de la fonction 

    $x = 0;

    for($i=0; isset($str[$i]); $i++){  // la variable $i va parcourir la string str 

        if($str[$i] == $char) // si $str[$i] == $char alors le compteur $x va ++
        $x++; // le compteur va prendre +1 a chaque fois que $str et $char vont correspondre 
    }

    return $x;
}

$occu = occurences('hello LaPlateforme', 'e'); // on déclare  les variable $str et $char 

echo $occu; // echo de la fonction

