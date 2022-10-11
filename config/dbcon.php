<?php
$db_host = "localhost";
// $port = "";
$db_user = "root";
$db_pass = "";
$db_name = "cpi_dbs";

//make connection
try {
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // echo "<script> console.log('Database connected'); </script>";
} catch (Exception $e) {
    echo "<script> console.error('An error occured while connecting to the database.'); </script>";
    exit();
}
