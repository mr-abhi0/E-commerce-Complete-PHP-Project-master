<?php
include('db_con1.php'); 
if(isset($_GET['del']))
{
$delete_id=$_GET['del'];
$delete_query="delete from slider_new where sl_id='$delete_id'";
if(mysqli_query($con,$delete_query))
{
echo "<script>alert('slider List Has been Deleted')</script>";
echo "<script>window.open('view_sliderupload.php','_self')</script>";
}
}
?>