<?php
  require 'dbconfig/config.php';
   if(isset($_GET['del4']))
   {
	   $cno= $_GET['del4'];
	   $sql="delete from course
	   where cno='$cno'";
	   $query_run = mysqli_query($con,$sql);
	   if($query_run)
	   {
		   header('location:view4.php');
	   }
   }

?>