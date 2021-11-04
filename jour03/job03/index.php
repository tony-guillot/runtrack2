<?php

$str = 'I\'m sorry Dave I\'m afraid I can\'t
do that.';

$v = "aeiouyI";

$i = 0;

 while(isset($str[$i])){
     $x = 0;
    while(isset($v[$x])){
        if($str[$i] == $v[$x])
        echo $str[$i] . '<br>';
        $x++;
    }
    $i++;
 }

