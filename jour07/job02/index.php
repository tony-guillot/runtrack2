<?php



$contenu = 'Nombre de visites';



if(isset($_POST['reset'])) { 

    setcookie('nbvisites');
    unset($_COOKIE['nbvisites']);
    header('Location: index.php');
}

if(!isset($_COOKIE['nbvisites'])){

    setcookie('nbvisites', 0, time() + (3600));

    }

else{
setcookie('nbvisites',$_COOKIE['nbvisites'] +1);
    }


echo $_COOKIE['nbvisites'] . '  ';

echo $contenu ;

?>

<form action="#" method="post">
    <input type="submit" value="reset" name="reset">
</form>