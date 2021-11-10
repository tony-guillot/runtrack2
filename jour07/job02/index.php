<?php



$contenu = 'Nombre de visites';



if(isset($_POST['reset'])) {    // permet de supprimer le cookie avec la fonction unset 

    setcookie('nbvisites');
    unset($_COOKIE['nbvisites']);
    header('Location: index.php');
}

if(!isset($_COOKIE['nbvisites'])){

    setcookie('nbvisites', 0, time() + (3600)); // on definis que $S_COOKIE = setcookie et ces paramère, nom, valeur, time

    }

else{
setcookie('nbvisites',$_COOKIE['nbvisites'] +1); // set cookie prend +1
    }


echo $_COOKIE['nbvisites'] . '  ';

echo $contenu ;

?>

<form action="#" method="post">
    <input type="submit" value="reset" name="reset">
</form>