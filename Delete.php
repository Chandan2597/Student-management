<?php
  require 'dbconfig/config.php';
   if(isset($_GET['del']))
   {
	   $dno= $_GET['del'];
	   $sql="delete from dept
	   where dno='$dno'";
	   $query_run = mysqli_query($con,$sql);
	   if($query_run)
	   {
		   header('location:view2.php');
	   }
   }

?>