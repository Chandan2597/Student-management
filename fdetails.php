<?php
session_start();
 require 'dbconfig/config.php'

 ?>
 <?php
require_once("config.php");
?>
 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Students</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-light" id="page-top" style="font-family: 'Roboto', sans-serif; font-size: 16px">
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="" style="font-family:'Cinzel', serif ">ABC College</a>
    </nav>
    <br>     
    <div class="content-wrapper bg-light" style="font-family: 'Roboto', sans-serif; font-size: 16px">

    <div class="container-fluid">
      <a class="btn btn-success text-white" href='view3.php'>Back</i></a>
      <br><br>
      <ol class="breadcrumb w-75">
        <li class="breadcrumb-item">
          <a href="">Faculty Details</a>
        </li>
        </ol>
		<div class="card w-75 text-dark">
			<div class="card-body ">
				<h5 class="card-title"></h5>
					<p class="card-text"></p>
<?php
   require 'dbconfig/config.php';
   if(isset($_GET['d']))
   {
     $id= $_GET['d'];
     $sql="select * from faculty,dept where faculty.dno=dept.dno and id=$id";
     $query_run = mysqli_query($con,$sql);
     while($z = mysqli_fetch_assoc($query_run))
     {
      ?>
    
        

        <div class="form-row">
          <div class="card bg-light" style="width: 180px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.1);
                text-align: center;">
           <center><img src="<?php echo $z['imglink1']?>" id="profile-img-tag" width="160px" height="180px" / disabled></center>
          </div>
        </div>
          <br>
          <strong>
				  <div class="form-row">
					<div class="col-sm-3">
						<div class="form-group" >
						<label for="formGroupExampleInput">Faculty Id</label>
						<input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['id']?>" disabled>
						</div>
					</div>
          <div class="col-sm-5">
            <div class="form-group" >
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['fname']?> <?php echo $z['mname']?> <?php echo $z['lname']?>" disabled>
            </div>
          </div>
				  </div>
        
				<div class="form-row">
					<div class="col-sm-3">
						<div class="form-group" >
						<label for="formGroupExampleInput">Date of Birth</label>
							<input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['dob']?>" disabled>
						</div>
					</div>
          <div class="col-sm-3">
              <div class="form-group" >
                <label for="formGroupExampleInput">Sex</label>
              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['sex']?>" disabled>
            </div>
          </div>
				</div>
        <div class="form-row">
          <div class="col-sm-4">
            <div class="form-group" >
            <label for="formGroupExampleInput">Phone Number</label>
            <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['phno']?>" disabled>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group" >
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['email']?>" disabled>
            </div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Religion</label>
              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['religion']?>" disabled>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Caste</label>
              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['caste']?>" disabled>
            </div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-sm-5">
              <div class="form-group" >
                <label for="formGroupExampleInput">State</label>
              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['state']?>" disabled>
            </div>
          </div>
          <div class="col-sm-5">
              <div class="form-group" >
                <label for="formGroupExampleInput">City</label>
                    <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['city']?>" disabled>
              </div>
            </div>
          </div>
            <div class="form-row">
              <div class="col-sm-3">
                <div class="form-group" >
                  <label for="formGroupExampleInput">Date of Joining</label>
                  <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['doj']?>" disabled>
                </div>
              </div>
            <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Belongs to Department</label>
              <input type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['dname']?>" disabled>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Designation</label>
                    <input name="lname" type="text" class="form-control " id="formGroupExampleInput" placeholder="<?php echo $z['type']?>" disabled>
              </div>
            </div>
            
        </div>
       <?php
        }
     
        }
      ?>
      </div>
     </div>
   </div>
 
 <br>
    
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    </div>
 
	
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  
</body>

</html>