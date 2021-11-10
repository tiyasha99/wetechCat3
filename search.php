<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search</title>
</head>

<body>
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

</body>
</html>
