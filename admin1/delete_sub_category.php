<?php
include('db_con1.php'); 
if(isset($_GET['del']))
{
$delete_id=$_GET['del'];
$delete_query="delete from sab_categories where s_id='$delete_id'";
if(mysqli_query($con,$delete_query))
{
echo "<script>alert('sub Category Has been Deleted')</script>";
echo "<script>window.open('subcategory.php','_self')</script>";
}
}
?>