<?php  

$m= $_REQUEST['stu_id'];
$conn = mysqli_connect("localhost:3306", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "DELETE FROM stuinfo where stu_id = $m";  

 mysqli_query($conn, $sql);  
 ?>
<script type="text/javascript">
				alert('Data deleted successfully');
				window.location="view_stu.php";
		 </script>
		 <?php
mysqli_close($conn);  

?>  