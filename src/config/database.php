<?php
/*
$host = "localhost";
$port = "5432";
$dbname = "petstore";
$user = "postgres";
$password = "1004509527";
*/

$host = "aws-0-us-east-2.pooler.supabase.com";
$port = "6543";
$dbname = "postgres";
$user = "postgres.fhsrplhioxkoiliuizng";
$password = "unicesmagQQ";

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
