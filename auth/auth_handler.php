<?php
$rawdata = file_get_contents("php://input");
// echo $rawdata;
$paramDataObj = json_decode($rawdata);
// print_r($paramDataObj);
// echo $paramDataObj->username . " " . $paramDataObj->password . " " . $paramDataObj->user_type;

//import database connection
include_once "../config/dbcon.php";

//function for string sanitize
function string_sanitize($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

//store sanitized data into variables
$username = string_sanitize($paramDataObj->username);
$password = string_sanitize($paramDataObj->password);
$user_type = string_sanitize($paramDataObj->user_type);

//login credentials comparison for login
if ($user_type == "teacher") {
    $sql = "SELECT id, password FROM management WHERE username = '" . mysqli_real_escape_string($conn, $username) . "'";
    // echo $sql;
    $result = mysqli_query($conn, $sql);
    // print_r($result);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    }else {
        echo json_encode({})
    }
}
