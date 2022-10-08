<?php
include('db_con1.php');
if(isset($_POST['submit']))
{
	$employee_id=$_POST['employee_id'];
	$slider_title=mysqli_real_escape_string($con,$_POST['slider_title1']);
	$slider_sub_title=mysqli_real_escape_string($con,$_POST['short_des']);
	$url_button=mysqli_real_escape_string($con,$_POST['page_url']);

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
 $sql = "insert into slider_new(employee_id,slider_title,slider_sub_title,url_button,image)values('$employee_id','$slider_title','$slider_sub_title','$url_button','$image')";
 
   if(mysqli_query($con,$sql))
{
echo "<script>alert('aded Your slider Successfully')</script>";
echo"<script>window.open('sliderupload.php?id=".$employee_id."','_self')</script>";
}
}
}
?>