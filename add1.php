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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-light" id="page-top" style="font-family: 'Roboto', sans-serif; font-size: 16px">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" id="mainNav">
    <a class="navbar-brand" href="" style="font-family:'Cinzel', serif ">Student Management System</a>
    <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       <div class="collapse navbar-collapse navbar-dark" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav " id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link navbar-dark" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard text-dark"></i>
            <span class="nav-link-text text-dark">Dashboard</span>
          </a>
        </li>
        
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Students">
          <a class="nav-link nav-link-collapse collapsed " data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-hand-o-right text-dark" aria-hidden="true"></i>
            <span class="nav-link-text text-dark">Students</span>
          </a>
         <ul class="sidenav-second-level collapse text" id="collapseExamplePages">
            <li>
              <a href="view1.php" >View</a>
            </li>
            <li>
              <a href="add1.php">Add </a>
            </li>
            
          </ul>
        </li>
    
    <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Department">
          <a class="nav-link nav-link-collapse collapsed " data-toggle="collapse" href="#collapseExamplePages1" data-parent="#exampleAccordion">
            <i class="fa fa-hand-o-right text-dark" aria-hidden="true"></i>
            <span class="nav-link-text text-dark">Department</span>
          </a>
          <ul class="sidenav-second-level collapse navbar-dark" id="collapseExamplePages1">
            <li>
              <a href="view2.php">View</a>
            </li>
            <li>
              <a href="add2.php">Add</a>
            </li>
            
          </ul>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Faculty">
          <a class="nav-link nav-link-collapse collapsed " data-toggle="collapse" href="#collapseExamplePages3" data-parent="#exampleAccordion">
            <i class="fa fa-hand-o-right text-dark" aria-hidden="true"></i>
            <span class="nav-link-text text-dark">Course</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages3">
            <li>
              <a href="view4.php">View</a>
            </li>
            <li>
              <a href="add4.php">Add</a>
            </li>
            
          </ul>
        </li>
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item bg-light">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
    
    <li class="nav-item">
          <a class="nav-link">
            <i class=""></i>
      
      
      
      
      </a>
        </li>
        
        
        
        <li class="nav-item">
          <a class="nav-link text-light" href="logout.php">
            <i class="fa fa-fw fa-sign-out text-light"></i>Logout</a>
        </li>
      </ul>
    </div>
  
  
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Add Students</a>
        </li>
        </ol>
		<div class="card w-100 bg-light text-dark">
			<div class="card-body ">
				<h5 class="card-title"></h5>
					<p class="card-text"></p>
			<form action="save1.php" method="post" autocomplete="ON">

        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   <?php echo $_SESSION['success_message']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      
                        <?php
                        unset($_SESSION['success_message']);
                        }
                        ?>
                        <?php if (isset($_SESSION['success_message1']) && !empty($_SESSION['success_message1'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                   <?php echo $_SESSION['success_message1']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      
                        <?php
                        unset($_SESSION['success_message1']);
                        }
                        ?>

				  <div class="form-row">
					<div class="col-sm-2">
						<div class="form-group" >
						<label for="formGroupExampleInput">Student Id</label>
						<input name="id" type="text" class="form-control " id="formGroupExampleInput" placeholder="Enter Student Id" required>
						</div>
					</div>
				  </div>
        
				<div class="form-row">
					<div class="col-sm-4">
						<div class="form-group" >
						<label for="formGroupExampleInput">First Name</label>
						<input name="fname" type="text" class="form-control " id="formGroupExampleInput" placeholder="Enter First Name" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group" >
						<label for="formGroupExampleInput">Middle Name</label>
						<input name="mname" type="text" class="form-control " id="formGroupExampleInput" placeholder="Enter Middle Name">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group" >
						<label for="formGroupExampleInput">Last Name</label>
						<input name="lname" type="text" class="form-control " id="formGroupExampleInput" placeholder="Enter Last Name" required>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-sm-4">
						<div class="form-group" >
						<label for="formGroupExampleInput">Date of Birth</label>
							<input name="dob" id="datepicker" width="300" placeholder="Enter Date of Birth" required>
						</div>
					</div>
          <div class="col-sm-2">
              <div class="form-group" >
                <label for="formGroupExampleInput">Sex</label>
              <select name="sex" class="form-control" required>
                  <option >Select Sex</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
              </select>
            </div>
          </div>
				</div>
        <div class="form-row">
          <div class="col-sm-3">
            <div class="form-group" >
            <label for="formGroupExampleInput">Phone Number</label>
            <input name="phno" type="text" class="form-control " id="formGroupExampleInput" minlength=10 maxlength=10 placeholder="Enter Phone Number" required>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group" >
            <label for="formGroupExampleInput">Email</label>
            <input name="email" type="email" class="form-control " id="formGroupExampleInput" placeholder="Enter Email" required>
            </div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-sm-3">
              <div class="form-group" >
                <label for="formGroupExampleInput">Religion</label>
              <select name="religion" class="form-control" required>
                  <option >Select Religion</option>
                  <option value="Hinduism">Hinduism</option>
                  <option value="Islam">Islam</option>
                  <option value="Christianity">Christianity</option>
                  <option value="Sikhism">Sikhism</option>
                  <option value="Buddhism">Buddism</option>
                  <option value="Jainism">Jainism</option>
              </select>
            </div>
          </div>
          <div class="col-sm-3">
              <div class="form-group" >
                <label for="formGroupExampleInput">Caste</label>
              <select name="caste" class="form-control" required>
                  <option >Select Caste</option>
                  <option value="General">General</option>
                  <option value="OBC">OBC</option>
                  <option value="ST(P)">ST(P)</option>
                  <option value="ST(H)">ST(H)</option>
                  <option value="SC">SC</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">State</label>
              <select onChange="getdistrict(this.value);"  name="state_id" id="state_id" class="form-control" required>
                <option value="">Select State</option>
              <?php $query =mysqli_query($conn,"SELECT * FROM state");
                  while($row=mysqli_fetch_array($query))
                { 
                ?>
                    <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">City</label>
                    <select name="city1" id="district-list" class="form-control" required>
                        <option value="">Select City</option>
                    </select>
              </div>
            </div>
          </div>
            <div class="form-row">
              <div class="col-sm-4">
                <div class="form-group" >
                  <label for="formGroupExampleInput">Date of Joining</label>
                  <input name="doj" id="datepicker1" width="300" placeholder="Enter Date of Joining" required>
                </div>
              </div>
            <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Department</label>
              <select onChange="getcourse(this.value);" name="dno" id="dno" class="form-control" required>
                <option value="">Select Department</option>
              <?php $query1 =mysqli_query($con,"SELECT * FROM dept");
                  while($row1=mysqli_fetch_array($query1))
                { 
                ?>
                    <option value="<?php echo $row1['dno'];?>"><?php echo $row1['dno'];?> - <?php echo $row1['dname'];?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Course</label>
                    <select name="cno" id="course-list" class="form-control" required>
                        <option value="">Select Course</option>
                    </select>
              </div>
            </div>
            
        </div>
					<button name ="submit_btn" type="submit" class="btn btn-success" style="width:120px;  font-size:18px">Add
            <i class="fa fa-send-o"></i></button>
			</form>
     
      
      </div>
     </div>
   </div>
 
 <br>
  
    
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    </div>
    <script>
function getcourse(val) {
  $.ajax({
  type: "POST",
  url: "get_course.php",
  data:'dno='+val,
  success: function(data){
    $("#course-list").html(data);
  }
  });
}
</script>
    <script>
function getdistrict(val) {
  $.ajax({
  type: "POST",
  url: "get_district.php",
  data:'state_id='+val,
  success: function(data){
    $("#district-list").html(data);
  }
  });
}

</script>

	<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            todayHighlight: true,
            autoclose: true,
            container: '#datepicker',
            orientation: 'top right',
            maxDate: new Date()
        });
    </script>
    <script>
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            todayHighlight: true,
            autoclose: true,
            container: '#datepicker1',
            orientation: 'top right',
            maxDate: new Date()
        });
    </script>
    <script>
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
         $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    </script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#customFile").change(function(){
        readURL(this);
    });
</script>
	
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