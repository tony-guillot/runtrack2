<?php


$str = 'Les choses que l\'on
possede finissent par nous posseder.';


for($i = 0; isset($str[$i]); $i++);

$i--;

while($i >= 0){

    echo $str[$i];
    $i--;
}





