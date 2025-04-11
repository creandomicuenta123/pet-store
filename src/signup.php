<?php

include('config/database.php');

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['e_mail'];
    $passw = $_POST['p_assw'];

    //encriptar
    $hashed_password = $password_hash = ($passw. PASSWORD_DEFAULT);

    $sql_validate_email = "
            select 
            count(id) as total
        from
            users
        where 
            email= '$email' and
            status = true
    " ;

    $ans =pg_query($conn, $sql_validate_email);

    if ($ans){//$ans == true
        $row =pg_fetch_assoc($ans);
        if ($row['total'] > 0){
            echo "el usuario ya existe";
        }
        else{
            $sql = "INSERT INTO users
                (firstname, lastname, email, password)
            values ('$fname','$lname','$email','$hashed_password')
            ";

            $ans = pg_query($conn,$sql);
            if ($ans){
                echo "<script>alert('user has been created, go to login')</script>";
                echo ("refreh: 0;URL =http://localhost/pert-store/src/signin.html");
            }else{
                echo'error';
            }
        }
    }else{
        echo 'no existe';
    }
   
    


?>
