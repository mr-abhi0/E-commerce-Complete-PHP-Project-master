<?php
include('db_con1.php');

if(isset($_POST['submit']))
				{
	 $employee_id=$_POST['employeeid'];
	$cat_id=mysql_real_escape_string($_POST['vender_names']);	
$invoice_number=mysql_real_escape_string($_POST['invoice_number']);	
$product=mysql_real_escape_string($_POST['product_name']);	
$amount=mysql_real_escape_string($_POST['amount']);	
$amount_type=mysql_real_escape_string($_POST['amount_type']);
$pyament_by_employee=mysql_real_escape_string($_POST['by_employee']);
$remaining_amount=mysql_real_escape_string($_POST['remaing_amount']);
$closing_valiance=mysql_real_escape_string($_POST['closing_amount']);
$status=mysql_real_escape_string($_POST['amount_status']);
$remark=mysql_real_escape_string($_POST['other_remark']);
	
	if($invoice_number=='')
					{
					echo "<script>alert('Dear sir please check the some & fields')</script>";	
						
					}
					else
					
					{
						
						$query ="insert into payment_status(employee_id,cat_id,invoice_number,product,amount,amount_type,pyament_by_employee,remaining_amount,closing_valiance,status,remark)values('$employee_id','$cat_id','$invoice_number','$product','$amount','$amount_type','$pyament_by_employee','$remaining_amount','$closing_valiance','$status','$remark')";
						if(mysql_query($query))
						{ 
							
							echo"<script>alert('update payment Status!')</script>";	
echo"<script>window.open('payment_status.php?id=".$employee_id."','_self')</script>";
						}
					}
						
				}
				?>
				
				
				
				
