


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <label for="nom"> Nom : </label>
    <input type="text" name="nom">
    <label for="prenom">prenom :</label>
    <input type="text" name="prenom">
    <input type="submit" value='valider'>
    





    </form>
</body>
</html>

<?php

$i = 0;
foreach( $_GET as $key => $val){
   
    $i++;
}


echo $i;



?>