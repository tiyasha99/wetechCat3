<?php
$conn = mysqli_connect("localhost:3306", "root", "","christ");
?>
<h1>SEARCH</h1>
<form action="" method="POST">
<label><font color="#FFFFFF">Student Id:</font></label><br />
<input type="text" name="stu_id" placeholder="Student ID" required/>
<br /><br />
<button type="submit" name="submit">Submit</button>
</form>
<?php
if (isset($_POST['stu_id'])) {
	$id = $_POST['stu_id'];
	echo $id;
	?>
	
<table>
    <p>&nbsp;</p>
    <table width="1100" height="260" border="4" align="center">
  <tr>
  <th width="100">Student Name</th>
  <th width="126">Age</th>
  <th width="100">Gender</th>
  <th width="100">Course</th>
  <th width="146">Address</th>
  </tr>
  <?php
    $sel="SELECT * FROM   stuinfo  WHERE  stu_id ='$id'";

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

</form> 
<a href="srch_course.php"><h2>Search MCA Course</h2></a>