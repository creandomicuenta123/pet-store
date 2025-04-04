<?php

include('config/database.php');

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['e_mail'];
    $passw = $_POST['p_assw'];



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
            values ('$fname','$lname','$email','$passsw')
            ";

            $ans = pg_query($conn,$sql);
            if ($ans){
                echo'ya fue ingresado';
            }else{
                echo'error';
            }
        }
    }else{
        echo 'no existe';
    }



?>
