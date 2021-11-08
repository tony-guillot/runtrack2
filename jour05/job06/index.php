<?php

function leetspeak($str){

    for($i = 0; isset($str[$i]); $i++){ // $i parcour ma chaine de caratère
        
        if($str[$i] == "a"){ // je définis que si $str == A alors $str devient 4
            
           $str[$i] = "4"; 
           
        }elseif($str[$i] == "e"){
           
            $str[$i] = '3';

        }elseif($str[$i] == "t"){

            $str[$i] = '7';      

        }elseif($str[$i] == "l"){

            $str[$i] = '1';
        }
        
        
    }

        return $str; // je return ma variable $str 
}


$speak = leetspeak('hello Laplateforme comment ça va ?'); // de definit  la valeur de ma string $str 

echo $speak;