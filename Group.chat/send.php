<?php

include "config.php";
session_start();
if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `posts1`(`name`, `message`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: homepage.php');
	}
	else
	{
		echo "Something went wrong";
        echo("Error description: " . mysqli_error($conn));
	}
	
	}
?>