<?php  

 
$conn = mysqli_connect("localhost:3306", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT stu_id,stu_name,course FROM stuinfo WHERE course like '%MCA%'";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
  <table width='200' border='1'>
 <tr><th height="42">Student ID</th>
 <th>Student name </th><th>Course</th></tr>

 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><td>$row[stu_id]</td> <td>$row[stu_name]</td> <td>$row[course]</td> </tr>";
	
  } 
 ?>
 </table>
 
 <h4><a href="view_stu.php">Back</a></h4>
 <?php
mysqli_close($conn);  
?>
</body>
</html>

  <h3>SEARCH</h3>   
<form action="search1.php" method="POST">
<label><font color="#FFFFFF">Student Id:</font></label><br />
<input type="text" name="stu_id" placeholder="stu_id" required/>
<br /><br />
<button type="submit" name="submit">Submit</button>
</form> 
<?php
$conn = mysqli_connect("localhost:3306", "root", "","christ");


?>
<?php
if (isset($_POST['stu_id'])) {
	$id = $_POST['stu_id'];
	?>
<table>
    <p>&nbsp;</p>
    <table width="600" height="260" border="4" align="center">
  <tr>
  <th width="100">Student Id</th>
  <th width="100">Student Name</th>
  <th width="100">Course</th>
  </tr>
  <?php
    $sel="SELECT stu_id,stu_name,course FROM stuinfo WHERE course like '%MCA%'";

    $res=$conn->query($sel);
    while($f=$res->fetch_object())
    {
  ?>
  <style>
  a{
    text-decoration:none;
  }
  </style>
      <tr>
	  <td><?php echo $f->stu_name;?></td>
      <td><?php echo $f->age;?></td>
      <td><?php echo $f->gender;?></td>
      <td><?php echo $f->course;?></td>
	  <td><?php echo $f->address;?></td>
      </tr>
    <?php
    }
	}
    ?>
  </table>    
  </table>

</body>
</html>
