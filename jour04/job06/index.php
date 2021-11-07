
<form action="" method="get">
    <input type="text" name='nombre'>
    <input type="submit">
</form>

<?php



if($_GET['nombre'] % 2 == 0){

        echo 'nombre pair';
    
}else{
    echo 'Nombre impair';
}




?>