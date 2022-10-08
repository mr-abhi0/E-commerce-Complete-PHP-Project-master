<?php
include('db_con1.php');

if(isset($_POST['submit']))
				{
	 $employee_id=$_POST['employeeid'];
$cat_id=$_POST['product_cat'];	
$sab_title=$_POST['sub_cat'];	
	
	if($sab_title=='')
					{
					echo "<script>alert('Dear sir please check the some & fields')</script>";	
						
					}
					else
					
					{
						
						$query ="insert into sab_categories(employee_id,cat_id,sab_title)values('$employee_id','$cat_id','$sab_title')";
						if(mysqli_query($con,$query))
						{ 
							
							echo"<script>alert('save sub category!')</script>";	
echo"<script>window.open('subcategory.php?id=".$employee_id."','_self')</script>";
						}
					}
						
				}
				?>
				
				
				
				
