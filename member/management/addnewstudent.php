<?php
if ($_COOKIE["loggedin"] != "true") {
    // echo "<script> location.href = '../../auth/'; </script>";
    header("Location: ../../auth/");
}

// Functions for generating default password for new student
function genPass($stuId)
{
    $charset = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*_-+=<>:';
    $charset = str_shuffle($charset);
    $pass = "" . $stuId;
    // $shuffled = str_shuffle($charset);
    for ($i = 0; $i < 6; $i++) {
        $ranIndex = rand(0, strlen($charset) - 1);
        $pass = $pass . $charset[$ranIndex];
    }
    return $pass;
}
echo genPass(2122003);
