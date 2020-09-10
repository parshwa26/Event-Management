
<?php
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"ce");
$email=$_POST["E_mail"];
$password=$_POST["Password"];
echo $sql="select Semester,Department,Division from semester_table,department_table,division where Semester='$sem' and Department='$dept' and Division='$div'";

$result = mysqli_query($con , $sql);


echo $cnt = mysqli_num_rows($result);
if($cnt > 0)
{

	$_SESSION['Semester']=$sem;
	$_SESSION['Department']=$dept;
	$_SESSION['Division']=$div;
	header("location:sucess.php?st=success");
	echo "yes";
}
else
{
	echo "not";
	header("location:fail.php?st=success");
}
?>
