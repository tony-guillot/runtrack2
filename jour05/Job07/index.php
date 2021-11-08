
<?php

 echo $gras; 


?>


<form action="" method="post">

<input type="text" nom="str">
<select name="fonction" >
<option value="gras" 
<?php

function gras($str){
    
    for($i = 0; isset($str[$i]); $i++){
        
        if($_POST['fonction'] == $str[$i]){
        
       $str[$i] = "<b>";
    }
    return $str;
}
}
$gras = gras('hello la Plateforme');

?>


>Gras</option>
<option value="cesar ">Cesar</option>
<option value="plateforme">Plateforme</option>

</select>
<input type="submit">



</form>


