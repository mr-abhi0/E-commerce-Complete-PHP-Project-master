<?php
include('db_con1.php');
if(isset($_GET['satus']))
{
$status1=$_GET['satus'];
$select=mysqli_query("select *from orders where id='$status1'");
while($row=mysqli_fetch_object($con,$select))
{
$status_var=$row->satus;
if($status_var=='NULL')
{
$status_state=Canceled;
}
else
{
$status_state=NULL;
}
$update=mysqli_query($con,"update orders set satus='$status_state' where id='$status1'");
if($update)
{
header("Location:order-history.php");
}
else
{
echo mysqli_error();
}
}
?>
<?php
}
?>