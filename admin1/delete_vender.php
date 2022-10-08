<?php
include('db_con1.php'); 
if(isset($_GET['del']))
{
$delete_id=$_GET['del'];
$delete_query="delete from vender_name where cat_id='$delete_id'";
if(mysql_query($delete_query))
{
echo "<script>alert('Category Has been Deleted')</script>";
echo "<script>window.open('add_vender.php','_self')</script>";
}
}
?>