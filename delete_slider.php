<?php
include('db_con.php');
if(isset($_GET['del']))
{
$delete_id=$_GET['del'];
$delete_query="delete from tbl_demo5 where id='$delete_id'";
if(mysql_query($delete_query))
{
echo "<script>alert('Slider Has been Deleted')</script>";
echo "<script>window.open('insert_slider.php','_self')</script>";
}
}
?>