<?php  
$id= $_REQUEST['stu_id'];
$sn= $_REQUEST['stu_name'];
$age= $_REQUEST['age'];
$g= $_REQUEST['gender'];
$c = $_REQUEST['course'];
$add=  $_REQUEST['address'];


$conn = mysqli_connect("localhost:3306", "root", "","christ");  

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "INSERT INTO `stuinfo` (`stu_id`, `stu_name`, `age`, `gender`, `course`, `address`) VALUES ('$id','$sn',$age,'$g','$c','$add');";  
 
echo $sql;
  mysqli_query($conn, $sql); 
    ?>
	<script type="text/javascript">
				alert('Registration successful');
				window.location="view_stu.php";
		 </script>!>
	<?php

  mysqli_close($conn);
 
 ?>
 