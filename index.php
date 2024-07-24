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
  <title>WELCOME</title>
  <link rel="stylesheet" href="loaders.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:600,300" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
    <a class="navbar-brand" href="" style="font-family:'Cinzel', serif; font-size:24px ">Student Management System</a>
	</nav>
	<br><br><br>
    
<body class="bg-light" onload="myFunction()" style="margin:0;">

<main style="font-family: 'Roboto', sans-serif; font-size: 16px">

<div class="sp" id="loader"></div>
  <div id="myDiv">
    <div class="col-md-4 mx-auto mt-4">
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
      </div>
    <div class="card card-login mx-auto mt-4 ">
      <div class="card-header text-secondary">Login</div>
      <div class="card-body">
        <form action="auth.php" method="POST" id="f1"  autocomplete="OFF">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Username" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Enter Password" required>
          </div>
          <br>
          <button name ="login" type="submit" class="btn btn-primary" onclick="return true;" id="b1"  style="width:120px; float: right; font-size:16px">Login <i class="fa fa-sign-in"></i></button>
          <br>
        </form>
			 
      </div>
    </div>
  </div>
  </main>

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<script src="loaders.css.js"></script>
</body>
</html>