<?php

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
  <title>Update Course Details</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" style="font-family: 'Roboto', sans-serif; font-size: 16px">
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="" style="font-family:'Cinzel', serif ">ABC College</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Students">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            <span class="nav-link-text">Students</span>
          </a>
         <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="view1.php">View</a>
            </li>
            <li>
              <a href="add1.php">Add </a>
            </li>
            <li>
              <a href="update1.php">Search</a>
            </li>
            
          </ul>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Department">
          <a class="nav-link nav-link-collapse collapsed " data-toggle="collapse" href="#collapseExamplePages1" data-parent="#exampleAccordion">
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            <span class="nav-link-text ">Department</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages1">
            <li>
              <a href="view2.php">View</a>
            </li>
            <li>
              <a href="add2.php">Add</a>
            </li>
            <li>
              <a href="update2.php">Search</a>
            </li>
            
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Faculty">
          <a class="nav-link nav-link-collapse collapsed " data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            <span class="nav-link-text ">Faculty</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
            <li>
              <a href="view3.php">View</a>
            </li>
            <li>
              <a href="add3.php">Add</a>
            </li>
            <li>
              <a href="update3.php">Search</a>
            </li>
            
          </ul>
        </li>
		</li>
		<li class="nav-item  active" data-toggle="tooltip" data-placement="right" title="Faculty">
          <a class="nav-link nav-link-collapse collapsed " data-toggle="collapse" href="#collapseExamplePages3" data-parent="#exampleAccordion">
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            <span class="nav-link-text ">Course</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages3">
            <li>
              <a href="view4.php">View</a>
            </li>
            <li>
              <a href="add4.php">Add</a>
            </li>
            <li>
              <a href="update4.php">Search</a>
            </li>
            
          </ul>
        </li>
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
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
          <a class="nav-link" href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
	
	
	</nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="">Update Course Details</a>
        </li>
        
      </ol>
     
      
      
     </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>ABC COLLEGE</small>
        </div>
      </div>
    </footer>
    
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