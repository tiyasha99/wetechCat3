<?php  

$id = $_REQUEST['stu_id'];
$name = $_REQUEST['stu_name'];
$age = $_REQUEST['age'];
$g = $_REQUEST['gender'];
$c = $_REQUEST['course'];
$add = $_REQUEST['address'];
$m = $_REQUEST['pid'];


$conn = mysqli_connect("localhost:3306", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
 
  $sql = "update stuinfo set stu_id = '$id',stu_name = '$name',age = '$age',gender = '$g' ,course = '$c',address='$add' where stu_id = $m"; 
  echo $sql;
   ?>
<script type="text/javascript">
				alert('Data Updated Successfully');
				window.location="view_stu.php";
		 </script> 
		 
		 <?php
 mysqli_query($conn, $sql);  
 
mysqli_close($conn);  
?>  