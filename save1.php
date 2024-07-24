<?php
 require 'dbconfig/config.php'
?>
<?php
require_once('config.php');
?>
<?php
if(isset($_POST['submit_btn']))
{    
	
	  $id = $_POST['id'];

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

      echo $id,$fname,$mname,$lname,$dob,$sex,$phno,$email,$religion,$caste,$state,$city,$doj,$dno,$cno;
      while(($row1=mysqli_fetch_assoc($query1)) && ($row2=mysqli_fetch_assoc($query2))) 
      {
        $state = $row1["StateName"];
        $city = $row2["DistrictName"];
			
    
      $query1 = "insert into studentt values('$id','$fname','$mname','$lname','$dob','$sex','$phno','$email','$religion','$caste','$state','$city','$dno')";
       $query_run1 = mysqli_query($con,$query1);

      $query2 = "insert into enrolfor values('$id','$doj','$cno')";
      $query_run2 = mysqli_query($con,$query2);
      if($query_run1 && $query_run2)
      {
        session_start();
        $_SESSION['success_message'] = "Successfully Added Student";
        header("Location: add1.php");
        exit();
      }
      else
        {
          session_start();
          $_SESSION['success_message1'] = "Failed";
          header("Location: add1.php");
          exit();
        }
    
     }
   }
 

?>