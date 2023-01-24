<?php
session_start();
$con=mysqli_connect('localhost','root','','sauravgaming');
if (!$con) {
    die('connection failed'.mysqli_connect_error());
}
?>