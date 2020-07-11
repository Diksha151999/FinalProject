<?php

// This page updates the user password
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}


$oldpassword=  MD5(mysqli_escape_string($con,filter_input(INPUT_POST, 'oldpassword')));

$newpassword=  MD5(mysqli_escape_string($con,filter_input(INPUT_POST, 'newpassword')));


$password=  MD5(mysqli_escape_string($con,filter_input(INPUT_POST, 'password')));

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($newpassword != $password) 
    {
    header('location: settings.php?error=The two passwords don\'t match');
} 
else
    {
    if ($oldpassword == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $newpassword . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else
    {
        header('location: settings.php?error=Wrong Old Password');
}
    }
?>