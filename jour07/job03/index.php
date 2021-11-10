<?php

session_start();


if(isset($_POST['reset'])){

    session_destroy();
}


elseif(isset($_POST['prenom'])){

$_SESSION['prenoms'] = $_POST['prenom'];

foreach((array)$_SESSION['prenoms'] as $_SESSION['prenom']){

    if(isset($_POST['prenom'])){

        echo $_SESSION['prenom'];
        }
    }

}

?>

<form action="#" method="post">
    <input type="text" id='prenom'name='prenom'>
    <input type="submit" >
    <input type="submit" value="reset" name="reset">

</form>