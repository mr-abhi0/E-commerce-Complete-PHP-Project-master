<?php
include('db_con1.php');
if(isset($_POST['submit']))
{
	$employee_id=$_POST['employee_id'];
	$Project_title=mysqli_real_escape_string($con,$_POST['project_title1']);
	$short_des=mysqli_real_escape_string($con,$_POST['short_des']);
	$keyworld=mysqli_real_escape_string($con,$_POST['keyworld']);
	$Project_discription=mysqli_real_escape_string($con,$_POST['Project_discription']);
	$category=mysqli_real_escape_string($con,$_POST['category']);
	$sub_cat=$_POST['sub_cats'];
	$news_type=mysqli_real_escape_string($con,$_POST['news']);
	
$image=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
if($Project_title=='')
{
echo"<script>alert('Any Fields Empty')</script>";

exit();
}
else
//move_uploaded_file($image_tmp,"../images/$post_image");
$whitelist = array(".jpg" , ".png" , ".gif",".pdf");
$uploaddir = '../proimage/'; 
	foreach ($whitelist as $item){
		if(preg_match("/$item\$/", $_FILES['image']['name'])) {
			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir.$_FILES['image']['name'])) {
				echo '<font color=green>File is successfully uploaded</font>';
			}
		}
	}
{	
 $sql = "insert into project_live_new(employee_id,Project_title,short_des,keyworld,Project_discription,category,sub_cat,image,news_type) values('$employee_id','$Project_title','$short_des','$keyworld','$Project_discription','$category','$sub_cat','$image','$news_type')";
 
   if(mysqli_query($con,$sql))
{
echo "<script>alert('aded Your Post Successfully')</script>";
echo"<script>window.open('post.php?id=".$employee_id."','_self')</script>";
}
}
}
?>