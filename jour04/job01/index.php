


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

    <input type="text" name="nom">
    <input type="text" name="prenom">
    <input type="date" name="date" >
    <input type="submit" value='valider'>
    





    </form>
</body>
</html>

<?php
 
$i = 0;
foreach( $_GET as $val){
   
    echo $val . '<br>';

    $i++ ;
}
echo $i;


?>