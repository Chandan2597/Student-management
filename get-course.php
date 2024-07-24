<?php
require 'dbconfig/config.php'
if(!empty($_POST["dno_id"])) 
{
$query =mysqli_query($con,"SELECT * FROM course WHERE dno = '" . $_POST["dno_id"] . "'");
?>
<option value="">Select Course</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["cno"]; ?>"><?php echo $row["cname"]; ?></option>
<?php
}
}
?>