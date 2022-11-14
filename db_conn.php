<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "users";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo " connection failed! ";
}

//testing changing the db
// $sname = "localhost";
// $uname = "root";
// $password = "";
// $db_name = "test_closure_import";
// $conn = mysqli_connect($sname, $uname, $password, $db_name);

// if (!$conn) {
//     die("Connection Failed: " . mysqli_connect_error());
// }