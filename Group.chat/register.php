<?php
session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');

$username=$_POST["user"];
$password=$_POST["pass"];
$s="select * from users where username='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num>0)
{
    echo"Username already taken";
}
else
{
    $reg="insert into users(username,password) values('$username','$password')";
    mysqli_query($con,$reg);
    echo"Registration successful";
}
?>