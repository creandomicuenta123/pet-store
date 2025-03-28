<?php

    include('config/database.php');

    $fname =    $_POST['f_name']; 
    $lname =    $_POST['l_name']; 
    $email =    $_POST['e_mail']; 
    $passw =    $_POST['p_assw']; 

    $sql = "INSERT INTO users
            (firstname, lastnmae, email, password)
            VALUES('$fname','$lnmae','$email','$passw')

            ";
            $ans = pg_query($conn, $sql);
            if($znx){
                echo 'users has been created successfully';
            }else{
                echo 'error' ;
            }

?>