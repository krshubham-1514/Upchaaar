<?php
session_start();
$username=$_SESSION['username'];
echo "$username,You are succesfully login!";
?>