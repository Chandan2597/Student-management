<?php
ob_start();
?>
<?php
session_start();
 require 'dbconfig/config.php'

 ?>
 <?php
require 'config.php';
?>
 
 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Update Faculty</title>
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
          <a href="">Update Faculty Details</a>
        </li>
        </ol>
    <div class="card w-75 text-dark">
      <div class="card-body ">
        <h5 class="card-title"></h5>
          <p class="card-text"></p>

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
<?php
   require 'dbconfig/config.php';
   if(isset($_GET['ed3']))
   {
     $id= $_GET['ed3'];
     $sql="select * from faculty,dept where faculty.dno=dept.dno and id=$id";
     $query_run = mysqli_query($con,$sql);
     while($z = mysqli_fetch_assoc($query_run))
     {
      ?>
    
        
<form  method="post"  autocomplete="OFF">
        <div class="form-row">
          <div class="card bg-light" style="width: 180px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.1);
                text-align: center;">
           <center><img src="<?php echo $z['imglink1']?>" id="profile-img-tag" width="160px" height="180px" /></center>
          </div>
        </div>
        <br>
          <br>
          <strong>
          <div class="form-row">
          <div class="col-sm-3">
            <div class="form-group" >
            <label for="formGroupExampleInput">Faculty Id</label>
            <input name="id" type="text" class="form-control " id="formGroupExampleInput" value="<?php echo $z['id']?>" disabled>
            </div>
          </div>
          </div>
          <div class="form-row">
          <div class="col-sm-4">
            <div class="form-group" >
            <label for="formGroupExampleInput">First Name</label>
            <input name="fname" type="text" class="form-control " id="formGroupExampleInput" value="<?php echo $z['fname']?>" required>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group" >
            <label for="formGroupExampleInput">Middle Name</label>
            <input name="mname" type="text" class="form-control " id="formGroupExampleInput" value="<?php echo $z['mname']?>">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group" >
            <label for="formGroupExampleInput">Last Name</label>
            <input name="lname" type="text" class="form-control " id="formGroupExampleInput" value="<?php echo $z['lname']?>" required>
            </div>
          </div>
        </div>
        
        <div class="form-row">
          <div class="col-sm-3">
              <div class="form-group" >
                <label for="formGroupExampleInput">Sex</label>
              <select name="sex" class="form-control" required>
                  <option value="<?php echo $z['sex']?>" hidden><?php echo $z['sex']?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
                <div class="form-group" >
                  <label for="formGroupExampleInput">Date of Birth</label>
                  <input name="dob" class="form-control" id="datepicker" width="200" value="<?php echo $z['dob']?>" required>
                </div>
              </div>
        </div>
        <div class="form-row">
          <div class="col-sm-4">
            <div class="form-group" >
            <label for="formGroupExampleInput">Phone Number</label>
            <input name="phno" type="text" class="form-control " id="formGroupExampleInput" minlength=10 maxlength=10 value="<?php echo $z['phno']?>" >
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group" >
            <label for="formGroupExampleInput">Email</label>
            <input name="email" type="text" class="form-control " id="formGroupExampleInput" value="<?php echo $z['email']?>">
            </div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Religion</label>
              <select name="religion" class="form-control placeholder" required>
                  <option value="<?php echo $z['religion']?>" hidden><?php echo $z['religion']?></option>

                  <option value="Hinduism">Hinduism</option>
                  <option value="Islam">Islam</option>
                  <option value="Christianity">Christianity</option>
                  <option value="Sikhism">Sikhism</option>
                  <option value="Buddhism">Buddism</option>
                  <option value="Jainism">Jainism</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Caste</label>
              <select name="caste" class="form-control placeholder" required>
                  <option value="<?php echo $z['caste']?>" hidden><?php echo $z['caste']?></option>
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
                  <label for="formGroupExampleInput">Date of Joining</label>
                  <input name="doj" class="form-control" id="datepicker1" width="250" value="<?php echo $z['doj']?>" required>
                </div>
              </div>
            
            <div class="col-sm-4">
              <div class="form-group" >
                <label for="formGroupExampleInput">Department</label>
              <select onChange="getcourse(this.value);" name="dno" id="dno" class="form-control" required>
                <option value="<?php echo $z['dno'];?>" hidden><?php echo $z['dname'];?></option>
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
          <div class="col-sm-3">
              <div class="form-group" >
                <label for="formGroupExampleInput">Designation</label>
              <select name="type" class="form-control" required>
                  <option value="<?php echo $z['type']?>" hidden><?php echo $z['type']?></option>
                  <option value="Professor">Professor</option>
                  <option value="Assistant Professor">Assistant Professor</option>
                  <option value="Associate Professor">Associate Professor</option>
              </select>
            </div>
          </div>

          
            </div>
            <button name ="submit_btn" type="submit" class="btn btn-success" style="width:120px;  font-size:18px">Add
            <i class="fa fa-send-o"></i></button>
            </form>
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
<?php
if(isset($_POST['submit_btn']))
{    
  
      
      
      $fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $lname = $_POST['lname'];

      $dob = $_POST['dob'];
      $sex = $_POST['sex'];

      $phno = $_POST['phno'];
      $email = $_POST['email'];

      $religion = $_POST['religion'];
      $caste = $_POST['caste'];

      
      $doj = $_POST['doj'];
      $dno = $_POST['dno'];
      $type = $_POST['type'];

      

      
        
      
      
      
    
     $query1 = "update faculty set fname='$fname',mname='$mname',lname='$lname',dob='$dob',sex='$sex',phno='$phno',email='$email',religion='$religion',caste='$caste',doj='$doj',dno='$dno',type='$type' where id='$id'";

      $query_run1 = mysqli_query($con,$query1);
      if($query_run1)
          {
              session_start();
              $_SESSION['success_message'] = "Successfully Updated Faculty";
             header("Location: edit3.php?ed3=$id");
             ob_enf_fluch();
            
          }
      else
        {     
              session_start();
              $_SESSION['success_message1'] = "Failed";
              header("Location: edit3.php?ed3=$id");
              ob_enf_fluch();
                    
        }
    
     }
     
   
 

?>