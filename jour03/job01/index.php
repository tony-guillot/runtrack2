<?php

$tab = [200, 2004, 173, 98, 171, 404, 459];

foreach( $tab as $value){ // $value 
    
    if ( $value %  2 == 0){

        echo  $value . "est  paire <br />";

    }elseif ( $value % 2 != 0 ){

        echo  $value . "est  impaire <br />";

    }
    
   
}

