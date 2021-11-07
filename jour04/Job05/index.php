



<form action="" method="post">
<label for="username">username :</label>
<input type="text"name="username">
<label for="passeword">password : </label>
<input type="text" name="password">
<input type="submit" name='valider'>
</form>

<?php 




if($_POST['username'] == 'John'){


    if($_POST['password'] == 'Rambo')

        echo 'C\'est pas ma guerre';
    }

    else {
        echo 'Votre pire cauchemar';
    }


?>