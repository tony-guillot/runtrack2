<?php

session_start();




if(isset($_POST['reset'])){

    session_destroy();


   }


    if(!isset($_SESSION['nbvisites'])){

    $_SESSION['nbvisites'] = 0;
    
  
    }

else{
        $_SESSION['nbvisites']++;
    }


echo $_SESSION['nbvisites'];


?>


<form action="#" method='post'>
<input type="submit" value= 'reset'  name= 'reset'>

</form>


