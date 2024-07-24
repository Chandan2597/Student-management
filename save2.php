<?php

 require 'dbconfig/config.php'

 ?>
<?php
if(isset($_POST['submit_btn']))
{    
	
			$dno = $_POST['dno'];
			$dname = $_POST['dname'];
			
			
	  $query= "select * from dept WHERE dno='$dno'";
      $query_run = mysqli_query($con,$query);
    
    if(mysqli_num_rows($query_run)>0)
    {
      
     session_start();
          $_SESSION['success_message1'] = "Department ID Already Exist";
          header("Location: add2.php");
          exit();
    }   
    else
    {
      $query1 = "insert into dept values('$dno','$dname')";
      $query_run1 = mysqli_query($con,$query1);
      if($query_run1)
      {
        
        session_start();
        $_SESSION['success_message'] = "Successfully Added Department";
        header("Location: add2.php");
        exit();
      }
      else
        {
          session_start();
          $_SESSION['success_message1'] = "Failed";
          header("Location: add2.php");
          exit();
        }
    
     }
}
?>