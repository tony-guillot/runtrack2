<?php

$str = 'I\'m sorry Dave I\'m afraid I can\'t
do that.';

$v = "aeiouyI";


for($i = 0; isset($str[$i]); $i++){
    
    
for($x = 0; isset($v[$x]); $x++){
    if($str[$i] == $v[$x])

    echo $str[$i];
}

}
