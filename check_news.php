<?php 
require_once("includes/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysqli_query($con,"SELECT  email FROM  news_sub WHERE  email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already subscribe .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for News Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
