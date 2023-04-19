<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "collegepglife";
$conn = mysqli_connect($localhost, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Database Connection Failed! Please contact the administrator to fix the issue.";
    return;
}
