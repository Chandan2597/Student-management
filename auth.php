<?php
 require 'dbconfig/config.php'

?>

<?php
if(isset($_POST['login']))
{	
	
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$query="select * from login where username='$username' AND password='$password'";
	
	$query_run = mysqli_query($con,$query);
	
	if(mysqli_num_rows($query_run)>0)
	{
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['last_time'] =  time();
		header('location:dashboard.php');
	}
		else
	{ 
		  session_start();
          $_SESSION['success_message1'] = "Authentication Failed<br>Invalid Username or Password...";
          header("Location: index.php");
          exit();
	}
		

}

?>