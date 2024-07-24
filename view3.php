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
  <title>View Faculty</title>
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
          <a href="">View Faculty</a>
        </li>
        
      </ol>
      <div class="col-sm-16">
    
       
          
        <div class="card mb-5">
          <div class="card-header">
            
            Student Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover " id="dataTable" width="100%" cellspacing="50px">
                <thead>
                  <tr>
                    <th width="12%">Student ID</th>
                    <th width="15%">Name</th>
                    <th width="20%">Department</th>
                    <th width="20%">Designation</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
               
                <tbody>
        
                    <?php
        
                       $query_run1=mysqli_query($con,"select * from faculty,dept where faculty.dno=dept.dno order by id");
                       
      
                      while($row1 = mysqli_fetch_array($query_run1))
                        {
                            ?>
                       <tr>
                  
                          <td width="12%"><?php echo $row1['id']?></td>
                          <td width="15%"><a class="btn btn-outline-primary btn-sm" href='fdetails.php?d=<?php echo $row1['id'] ?>' > <?php echo $row1['fname'] ?> <?php echo $row1['mname'] ?> <?php echo $row1['lname'] ?></a></td>
                          <td width="20%"><?php echo $row1['dname']?></td>
                          <td width="20%"><?php echo $row1['type']?></td>
                          <td width="10%">
                              <a class="btn btn-danger btn-sm text-white" href='delete3.php?del3=<?php echo $row1['id'] ?>' ><i class="fa fa-trash-o" style="font-size:16px"></i></a>
                              <a class="btn btn-warning btn-sm text-white" href='edit3.php?ed3=<?php echo $row1['id'] ?>' ><i class="fa fa-pencil-square" style="font-size:16px"></i></a>
                               
                           </td>
                        </tr>
                        <?php
                          }
                        ?>
                  
                    </tbody>
                  </table>
                </div>
              </div>
          
              </div>
    
     
      
      
            </div>
     
      
      
     </div>

    
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