<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'user_registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from user_table where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    echo" Username taken";
}
else{
    $reg = "insert into user_table(name,password) values ('$name','$pass')";
    mysqli_query($con, $reg);
    echo "Registration successsful";
}
?> 