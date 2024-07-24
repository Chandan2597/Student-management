<?php

 require 'dbconfig/config.php'

 ?>
 <?php
require 'config.php';
?>
<?php
if(isset($_POST['submit_btn']))
{    
	
			$id = $_POST['edsave1'];
      
			$fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $lname = $_POST['lname'];

      $dob = $_POST['dob'];
      $sex = $_POST['sex'];

      $phno = $_POST['phno'];
      $email = $_POST['email'];

      $religion = $_POST['religion'];
      $caste = $_POST['caste'];

      $state_id = $_POST['state_id'];
      $city1 = $_POST['city1'];
      $doj = $_POST['doj'];
      $dno = $_POST['dno'];
      $cno = $_POST['cno'];

      

      $query1 = mysqli_query($conn,"SELECT * FROM state WHERE StCode = $state_id");

      $query2 = mysqli_query($conn,"SELECT * FROM district WHERE DistCode = $city1");

      
      while(($row1=mysqli_fetch_assoc($query1)) && ($row2=mysqli_fetch_assoc($query2))) 
      {
        $state = $row1["StateName"];
        $city = $row2["DistrictName"];
        
      
			
			
    
     $query1 = "update studentt set fname='$fname',mname='$mname',lname='$lname',dob='$dob',sex='$sex',phno='$phno',email='$email',religion='$religion',caste='$caste',state='$state',city='$city',doj='$doj',dno='$dno',cno='$cno' where id='$id'";

      $query_run1 = mysqli_query($con,$query1);
      if($query_run1)
          {
             session_start();
             $_SESSION['success_message'] = "Successfully Updated Student";
             header("Location: edit1.php?ed1=$id"); 
            exit();
          }
      else
        {
              session_start();
             $_SESSION['success_message1'] = "Successfully Updated Student";
             header("Location: edit1.php?ed1=$id"); 
            exit();        
        }
    
     }
     
   }
 

?>