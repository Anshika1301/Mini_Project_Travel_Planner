<?php

session_start();


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'user_registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from user_table where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location:html/box.html');
}
else{
    header('location:login.php');
}
?> 