<?php
  require 'dbconfig/config.php';
   if(isset($_GET['del1']))
   {
	   $id= $_GET['del1'];
	   $sql="delete from studentt
	   where id='$id'";
	   $query_run = mysqli_query($con,$sql);
	   $sql1="delete from enrolfor
	   where id='$id'";
	   $query_run1 = mysqli_query($con,$sql1);
	   if($query_run && $query_run1)
	   {
		   header('location:view1.php');
	   }
   }

?>