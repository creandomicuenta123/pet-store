<?php

$host = "localhost";
$port = "5432";
$dbname = "petstore";
$user = "postgres";
$password = "1004509527";

$data_connection = "
    host=$host
    port=$port
    dbname=$dbname
    user=$user  
    password=$password
";

$conn = pg_connect($data_connection);

if (!$conn) {
    echo 'connection error';
} else {
    echo 'success';
}

//pg_close($conn);
?>
