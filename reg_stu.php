<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"ce");

/*echo $sql = "insert into studnet_table(STUDENT_NAME,ROLL_NO,CLASS_NAME) values('".$_POST['STUDENT_NAME']."','".$_POST['ROLL_NO']."','".$_POST['CLASS_NAME']."');";
*/
// echo $sql = "insert into student_registration(Enrollment_No,Name ,E_mail,Pass,Semester,Department,Division) values('".$_POST['Enrollment_No']."','".$_POST['Name']."','".$_POST['E_mail']."','".$_POST['Pass']."','".$_POST['Semester']."','".$_POST['Department']."','".$_POST['Division']."');";
mysqli_query($con,$sql);

header("location:registration.php?st=success");



?>