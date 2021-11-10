<?php

session_start();




if(isset($_POST['reset'])){  // $_POST puis la valeur de mon bouton

    session_destroy(); // met fin à la session si le button reset et executer  
    header('Location: index.php');

   }


    if(!isset($_SESSION['nbvisites'])){

    $_SESSION['nbvisites'] = 0; // ont definit la valeur de $_SESSION
    
  
    }

else{
        $_SESSION['nbvisites']++; // ajout +1 a chaque rafréchissement de la page 
    }


echo $_SESSION['nbvisites']; 


?>


<form action="#" method='post'>
<input type="submit" value= 'reset'  name= 'reset'>  

</form>


