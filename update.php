<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php  

$m= $_REQUEST['stu_id'];
$conn = mysqli_connect("localhost:3306", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM stuinfo where stu_id = $m";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <form  action="update1.php" method="get">
 
 <table width='200' border='1'>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><th>Student ID</th><th>Student name</th><th>age</th><th>gender</th><th>Course</th><th>Address</th></tr><tr><td><input type = 'text' name = 'stu_id' value='$row[stu_id]'></td><td><input type = 'text' name = 'stu_name' value='$row[stu_name]'></td><td><input type = 'text' name = 'age' value='$row[age]'></td><td><input type = 'text' name = 'gender' value='$row[gender]'></td><td><input type = 'text' name = 'course' value='$row[course]'></td></tr><td><input type = 'text' name = 'address' value='$row[address]'></td>";
	
  } 
 ?>
 <input type="hidden" name="pid" value="<?php echo $m;?>" />
 
 </table><br />
<center> <input type="submit" value="submit"></center>
 </form>
 <?php
mysqli_close($conn);  
?>  

</body>
</html>
