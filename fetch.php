<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "college");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = " SELECT * FROM studentt INNER join dept on studentt.dno=dept.dno LEFT JOIN course on studentt.cno=course.cno  
  WHERE id LIKE '%".$search."%'
  OR fname LIKE '%".$search."%' 
  OR mname LIKE '%".$search."%'
  OR lname LIKE '%".$search."%' 
  OR city LIKE '%".$search."%' 
  OR state LIKE '%".$search."%' 
  OR dname LIKE '%".$search."%'
  OR cname LIKE '%".$search."%' ORDER BY id ";
}
else
{
 $query = "
  SELECT * FROM studentt, dept, course where studentt.dno=dept.dno and dept.dno=course.dno and studentt.cno=course.cno ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Student id</th>
     <th>Name</th>
     <th>City</th>
     <th>State</th>
     <th>Department</th>
     <th>Course</th>
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
    <td>'.$row["cname"].'</td>
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