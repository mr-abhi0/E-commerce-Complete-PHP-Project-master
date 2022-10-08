<?php 
include('../db_con.php');
if(isset($_POST['submit']))
{
$username=$_POST['user'];
$password=$_POST['pass'];
$ao="Administrative Officer IV";
$admin_query=("select user.username,user.user_id,user.password,personal_information.employee_id,personal_information.position from user join personal_information on user.employee_id=personal_information.employee_id where username='$username' and password='$password' and personal_information.position like '%Administrative Officer IV%'");
$admin=$mysqli->query($admin_query);
$row=$admin->fetch_array(MYSQLI_BOTH);
$attendance_admin_query=("select personal_information.employee_id,user.username,user.user_id,user.password,personal_information.position from user join personal_information on user.employee_id=personal_information.employee_id where  username='$username' and password='$password' and  personal_information.position like '%attendance%'");
$attendance_admin=$mysqli->query($attendance_admin_query);
$attendance_row= $attendance_admin->fetch_array(MYSQLI_BOTH);
$position=$attendance_row['position'];
$empquery=("select *from user where username='$username' and password='$password'");
$employee=$mysqli->query($empquery);
$empl= $employee->fetch_array(MYSQLI_BOTH);
if ($row > 0){

session_start();
$_SESSION['user_id']=$row['employee_id'];
header('location:index.php');
}
else if ($empl > 0 && $position!='attendance'){
session_start();
$_SESSION['employee_id']=$empl['employee_id'];
header("location:../user_root/dasbord.php");

}

else if ($attendance_row > 0 && $position=='attendance' ){

session_start();
$_SESSION['admin_attendance']=$attendance_row['employee_id'];
header("location:user_root/admin_attendance.php");

}

else{
header('location:login_error.php');
?>
   	
<?php } 

}

?>	
