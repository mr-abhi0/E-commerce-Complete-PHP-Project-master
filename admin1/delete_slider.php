<?php
include('db_con1.php'); 
if(isset($_GET['del']))
{
$delete_id=$_GET['del'];
$delete_query="delete from slider_new where sl_id='$delete_id'";
if(mysql_query($delete_query))
{
echo "<script>alert('slider Has been Deleted')</script>";
echo "<script>window.open('sliderupload.php','_self')</script>";
}
}
?>