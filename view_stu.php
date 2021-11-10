<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php  

 
$conn = mysqli_connect("localhost:3306", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM stuinfo";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
  <table width='200' border='1'>
 <tr><th height="42">Student ID</th>
 <th>Student name </th><th>Age</th><th>Gender</th><th>Course</th><th>Address</th><th colspan='2'>For modification</th></tr>

 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><td>$row[stu_id]</td> <td>$row[stu_name]</td><td>$row[age]</td><td>$row[gender]</td> <td>$row[course]</td> <td>$row[address]</td><td><a href='update.php?stu_id=$row[stu_id]'>Edit</a></td><td><a href='delete.php?stu_id=$row[stu_id]'>Delete</a></td>  </tr>";
	
  } 
 ?>
 </table>
 
 <h4><a href="reg.php">Back</a></h4>
 <h4><a href="search1.php">Search By STUDENT ID</a></h4>
 <?php
mysqli_close($conn);  
?>
</body>
</html>
