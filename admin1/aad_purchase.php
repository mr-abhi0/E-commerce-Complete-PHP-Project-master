 <?php
include('db_con1.php');
if(isset($_POST['submit']))
{
	$employee_id=$_POST['employee_id'];
	$vender_id=$_POST['vender_id'];
	$product_title=mysql_real_escape_string($_POST['title']);
	$product_list=mysql_real_escape_string($_POST['product_list']);
	$product_brand=mysql_real_escape_string($_POST['brand']);
	$quntiti=mysql_real_escape_string($_POST['quintity']);
	$price_our=mysql_real_escape_string($_POST['price_our']);
	$sales_price=mysql_real_escape_string($_POST['sales_price']);
	$bike_round=mysql_real_escape_string($_POST['bike']);
	$product_profitt=mysql_real_escape_string($_POST['profit']);
	$product_los=mysql_real_escape_string($_POST['los']);
	$product_date=$_POST['done_date'];
$product_status=mysql_real_escape_string($_POST['status']);
$product_specification=mysql_real_escape_string($_POST['specifaction']);
$image=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
if($product_title==''or $product_brand==''or $product_profitt=='')
{
echo"<script>alert('Any Fields Empty')</script>";

exit();
}
else
//move_uploaded_file($image_tmp,"../images/$post_image");
$whitelist = array(".jpg" , ".png" , ".gif",".pdf");
$uploaddir = '../proimage/'; 
	foreach ($whitelist as $item){
		if(preg_match("/$item\$/", $_FILES['image']['name'])) {
			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir.$_FILES['image']['name'])) {
				echo '<font color=green>File is successfully uploaded</font>';
			}
		}
	}
{	
 $sql = "insert into purchase_vender(employee_id,vender_id,product_title,product_list,
	product_brand,quntiti,price_our,sales_price,bike_round,product_profitt,
	product_los,product_date,product_status,product_specification,image)values('$employee_id','$vender_id','$product_title','$product_list',
	'$product_brand','$quntiti','$price_our','$sales_price','$bike_round','$product_profitt',
	'$product_los','$product_date','$product_status','$product_specification','$image')";
 
   if(mysql_query($sql))
{
echo "<script>alert('aded Your Post Successfully')</script>";
echo"<script>window.open('purchase.php?id=".$employee_id."','_self')</script>";
}
}
}
?>
