<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "college");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = " SELECT * FROM faculty INNER join dept on faculty.dno=dept.dno  
  WHERE id LIKE '%".$search."%'
  OR fname LIKE '%".$search."%' 
  OR mname LIKE '%".$search."%'
  OR lname LIKE '%".$search."%' 
  OR city LIKE '%".$search."%' 
  OR state LIKE '%".$search."%' 
  OR dname LIKE '%".$search."%'
  OR type LIKE '%".$search."%' ORDER BY id ";
}
else
{
 $query = "
  SELECT * FROM faculty, dept where faculty.dno=dept.dno ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Faculty Id</th>
     <th>Name</th>
     <th>City</th>
     <th>State</th>
     <th>Department</th>
     <th>Designation</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["fname"].' '.$row["mname"].' '.$row["lname"].'</td>
    <td>'.$row["city"].'</td>
    <td>'.$row["state"].'</td>
    <td>'.$row["dname"].'</td>
    <td>'.$row["type"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>