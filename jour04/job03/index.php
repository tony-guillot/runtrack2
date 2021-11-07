


<form action="" method="post">
<label for="name">Nom : </label>
<input type="text" name="nom">
<label for="prenom">Preom : </label>
<input type="text" name="prenom">
<label for="age">Age : </label>
<input type="text" name="age">
<input type="submit" name="valider">

</form>

<?php

$i = 0;

foreach($_POST as $val){

        $i++;
}
 echo $i;

?>