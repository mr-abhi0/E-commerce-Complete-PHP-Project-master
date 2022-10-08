<?php
include('db_con1.php');
if(isset($_POST['submit']))
{
	$order_id=$_POST['order_id'];
	$cansel_reason=mysqli_real_escape_string($con,$_POST['cancel_order']);
	$sms_remark=mysqli_real_escape_string($con,$_POST['sms']);
	$ip=mysqli_real_escape_string($con,$_POST['ipaddress']);
if($cansel_reason=='')
{
echo"<script>alert('Any Fields Empty')</script>";

exit();
}
else

{	
 $sql = "insert into cancel_order_query(order_id,cansel_reason,sms_remark,ip)values('$order_id','$cansel_reason','$sms_remark','$ip')";
 
   if(mysqli_query($con,$sql))
{
echo "<script>alert('Your order cancellation has been initiated. We will update your order status on the portal shortly.')</script>";
echo"<script>window.open('order-history.php','_self')</script>";
}
}
}
?>