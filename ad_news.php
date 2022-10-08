<?php
include('db_con1.php');
if(isset($_POST['news']))
{

	$email=mysqli_real_escape_string($con,$_POST['emailid']);

	$ip_address=mysqli_real_escape_string($con,$_POST['ipaddress']);

	

if($email=='')
{
echo"<script>alert('Any Fields Empty')</script>";

exit();
}
else
{	
 $sql = "insert into news_sub(email,ip_address)values('$email','$ip_address')";
 
   if(mysqli_query($con,$sql))
{
echo "<script>alert('Thank you for subscribing to our newsletter. We will be notifing you of all new products as they becomes available.

Happy Shopping!')</script>";
echo"<script>window.open('index.php','_self')</script>";
}
}
}
?>