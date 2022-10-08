<?php
include('db_con1.php');
if(isset($_POST['submit']))
{
	$employee_id=$_POST['employee_id'];
	$title=mysqli_real_escape_string($con,$_POST['up_title1']);
	$short_des=mysqli_real_escape_string($con,$_POST['short_des']);
	$barnd_name=mysqli_real_escape_string($con,$_POST['barnd']);
	$full_des=mysqli_real_escape_string($con,$_POST['Project_discription']);

$image=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
if($employee_id=='')
{
echo"<script>alert('Any Fields Empty')</script>";

exit();
}
else
move_uploaded_file($image_tmp,"../proimage/$image");
{	
 $sql = "insert into upcoming_product(employee_id,title,short_des,barnd_name,full_des,image)values('$employee_id','$title','$short_des','$barnd_name','$full_des','$image')";
 
   if(mysqli_query($con,$sql))
{
echo "<script>alert('aded Your slider Successfully')</script>";
echo"<script>window.open('upcoming.php?id=".$employee_id."','_self')</script>";
}
}
}
?>