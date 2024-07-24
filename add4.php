<?php
session_start();
 require 'dbconfig/config.php'

 ?>
 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Course</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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
          <a href="">Add Course Details</a>
        </li>
        
      </ol>
        <div class="card w-50 bg-light text-dark">
  <div class="card-body ">
    
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
                   
  <form action="save4.php"method="post" autocomplete="OFF">
<div class="col-sm-6">
  <div class="form-group" >
    <label for="formGroupExampleInput1">Course Id</label>
    <input name="cno" type="text" class="form-control " id="formGroupExampleInput1" placeholder="Enter Course Id" required autofocus>
    <span class="error1" style="color: red; display: none;">* Must be Number</span>
  </div>
</div>
<div class="col-sm-10">
  <div class="form-group">
    <label for="formGroupExampleInput2">Course Name</label>
    <input name="cname" type="text" class="form-control " id="formGroupExampleInput2" placeholder="Enter Course Name" required>
    <span class="error2" style="color: red; display: none">* Must be Alphabet</span>
  </div>
</div>
<div class="col-sm-10">
              <div class="form-group" >
                <label for="formGroupExampleInput">Department Id</label>
              <select name="dno" id="dno" class="form-control" required>
                <option value="">Select</option>
              <?php $query =mysqli_query($con,"SELECT * FROM dept");
                  while($row=mysqli_fetch_array($query))
                { 
                ?>
                    <option value="<?php echo $row['dno'];?>"><?php echo $row['dno'];?> - <?php echo $row['dname'];?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
<div class="col-sm-10">
  <input name="submit_btn" type="submit" value="Add"   class="btn btn-success" style="width:80px">
</div>
   
</form>
    
  </div>
</div>
     
      
      
     </div>

    
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
    
      $(document).ready(function() {
        $("#formGroupExampleInput1").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
               
           if (!(keyCode >= 48 && keyCode <= 57) &&(keyCode !=13)) {
             $(".error1").css("display", "inline");
              return false;
           }else{
              $(".error1").css("display", "none");
           }
        });
      });
     
    </script>

    <script type="text/javascript">
    
      $(document).ready(function() {
        $("#formGroupExampleInput2").bind("keypress", function (e) {
          var keyCode = e.which ? e.which : e.keyCode
              
           if (!(keyCode >= 65 && keyCode <= 90 ) && !(keyCode >= 97 && keyCode <= 122 ) &&(keyCode != 32 && keyCode != 13)) {
             $(".error2").css("display", "inline");
              return false;
           }else{
              $(".error2").css("display", "none");
           }
        });
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