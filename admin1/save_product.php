<?php
mysql_connect("localhost","root","");
mysql_select_db("tisprint");
if(isset($_POST['submit']))
				{
	 $employee_id=$_POST['employee_id'];
$cat_id=$_POST['parent_cats'];	
$sub_cats=$_POST['sub_catrs'];	
$product_name=$_POST['title'];
$maiteriyal=$_POST['material'];
$barnd=$_POST['gsm'];
$quintity=$_POST['quintity'];
$mrp=$_POST['mrps'];
$descount=$_POST['descounts'];
$stock=$_POST['stock'];
$size=$_POST['sizes'];
$specifaction=$_POST['specifaction'];
$image=$_FILES['product_image']['name'];
$image_tmp=$_FILES['product_image']['tmp_name'];

	if($product_name=='' or $descount=='' or $size=='')
					{
					echo"<script>alert('Any Fields Empty')</script>";

exit();
}
else
move_uploaded_file($image_tmp,"../images/$image");
{
$insert_query="insert into product_new(employee_id,cat_id,sub_cats,product_name,maiteriyal,barnd,quintity,mrp,descount,stock,specifaction,image,size)
values('$employee_id','$cat_id','$sub_cats','$product_name','$maiteriyal','$barnd','$quintity','$mrp','$descount','$stock','$specifaction','$image','$size')";
if(mysql_query($insert_query))
{
echo "<script>alert('Publish Your Post Successfully')</script>";
echo "<script>window.open('product1.php','_self')</script>";
}
}
}
?>
				