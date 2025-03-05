<?php 
session_start(); 
$un=$_SESSION["username"]; $uid=$_SESSION["userid"]; echo "Username is ".$un; echo "<br>UserID is ".$uid; 
?> 
