<?php
$rawdata = file_get_contents("php://input");
$paramDataObj = json_decode($rawdata);

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

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); //fetch result as an associative array.
        if ($row["password"] == $password) {
            setcookie("uid", $row["id"], time() + 86400, "/");
            $msg_arr = array("success" => "true", "user_type" => $user_type, "msg" => "login credentials matched");
            echo json_encode($msg_arr);
        } else {
            $msg_arr = array("success" => "false", "msg" => "incorrect password");
            echo json_encode($msg_arr);
        }
    } else {
        $msg_arr = array("success" => "false", "msg" => "incorrect username");
        echo json_encode($msg_arr);
    }
} elseif ($user_type == "student") {
    $sql = "SELECT s_id, password FROM students WHERE username = '" . mysqli_real_escape_string($conn, $username) . "'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); //fetch result as an associative array.
        if ($row["password"] == $password) {
            setcookie("sid", $row["s_id"], time() + 86400, "/");
            $msg_arr = array("success" => "true", "user_type" => $user_type, "msg" => "login credentials matched");
            echo json_encode($msg_arr);
        } else {
            $msg_arr = array("success" => "false", "msg" => "incorrect password");
            echo json_encode($msg_arr);
        }
    } else {
        $msg_arr = array("success" => "false", "msg" => "incorrect username");
        echo json_encode($msg_arr);
    }
} else {
    $msg_arr = array("success" => "false", "msg" => "invalid user type");
    echo json_encode($msg_arr);
}
