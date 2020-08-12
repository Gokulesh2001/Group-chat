<?php
//Get values pass from form in login.php file



session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');
$username=$_POST["user"];
$password=$_POST["pass"];

//to prevent mysql injection
//$username= stripslashes($username);
//$password= stripslashes($password);
//$username= mysqli_real_escape_string($username);
//$password= mysqli_real_escape_string($password);
//to connect with database
//mysql_connect("localhost","root","");
//mysql_select_db("login");
//result
$s="select * from users where username='$username' and password='$password'";
$result=mysqli_query($con,$s) or die("failed to query database");

//$result=  mysqli_query("select * from login where username='$username' and password='$password'")
//            or die("failed to query database");
$row=mysqli_fetch_array($result);
if($row['username']==$username && $row["password"]==$password){
    $_SESSION['name'] = $row['username'];
			header('Location: homepage.php');
//    echo "login successful      |      Welcome ";
//    echo $row['username'];
}
        else
        {
            echo "login failed";
        }

?>