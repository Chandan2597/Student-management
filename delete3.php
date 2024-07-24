<?php
  require 'dbconfig/config.php';
   if(isset($_GET['del3']))
   {
	   $id= $_GET['del3'];
	   $sql="delete from faculty
	   where id='$id'";
	   $query_run = mysqli_query($con,$sql);
	   if($query_run)
	   {
		   header('location:view3.php');
	   }
   }

?>