

<form action="" method="get">
<label for="largeur">largueur : </label>
<input type="text" name='largeur'>
<label for="hauteur">hauteur : </label>
<input type="text" name="hauteur">
<input type="submit">
</form>


<?php

if($_GET['largeur'] == 10){

    echo '' . '/\ ' . '<br />' . ' /_\ ';
    
}