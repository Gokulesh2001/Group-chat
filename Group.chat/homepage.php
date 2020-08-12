<?php
session_start();





?>
<!DOCTYPE html>
<html>
<body>
    <head>    
        <title>Welcome to Group chat</title>
        <link  rel='stylesheet' href="homepage.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    </body>
    <div id="main">
<div class="alert alert-info" role="alert"><?php echo $_SESSION['name']; echo " is ";?>online</div>
    <?php
    include "config.php";
    	$sql="SELECT id,name,message,DATE_FORMAT(created_on, ' %h:%i %p') as created_on FROM `posts1` WHERE DATE_FORMAT(created_on, '%d-%b-%Y')=DATE_FORMAT(CURDATE(), '%d-%b-%Y') ";

		$query = mysqli_query($conn,$sql);

	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
      
        
        
        
        <div class="container">
              <div  class="row";
		color: white;
		border-radius: 5px;">
			<div  class="Column1";><?php echo $row['name']; ?></div>
                  <div class="Column2"; ><?php echo $row['message']; ?></div>
    <div class="Column3";><?php echo $row['created_on'];?></div>

		</div></div>
        
        
        
        
        
        
        
        
        
        
		
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No previous chat available.
			</p>
</div>
<?php
	} 
?>

<!--
<div id="main">
    <h1 style="background-color:#6495ed; color:white;"><?php echo $_SESSION['name']; echo " is ";?>->online</h1>
-->
    <div class="output">
    </div>
    <form method="post" action="send.php">
        <p  align="center";>
    <textarea name="msg" placeholder="Type to send message...."class="form-control"; style="margin-top:40px;width:70%;background-color: #dcdcdc;"></textarea><br></p>
        <p align="right"; margin-right:20px;><input class="btn btn-primary"type="submit"value="Send" /></p>
    </form>
    <br>

    <form action="logout.php">
        <p align="center";><input style="width:20%;background-color:#6495ed;color:white;font-size:20px;" type="submit"value="Logout"></p>
    </form>
                                                                                                         </form>
