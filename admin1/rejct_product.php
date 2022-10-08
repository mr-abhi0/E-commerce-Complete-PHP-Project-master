<?php
$con=mysqli_connect("localhost","root","","tisonline");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  
if(!empty($_FILES['file']) && !empty($_POST['title'])){
	foreach($_FILES['file']['name'] as $key => $name){
		$size = $_FILES['file']['size'][$key];
		$extension = explode('.', $name);
		$extension = end($extension);
		$random_name = rand();
		$images = $random_name.".".$extension;
		$url = "../files/".$images;
		$title = $_POST['title'];
		$employee_id = $_POST['employee_id'];
		$cat_id = $_POST['parent_cat'];
		$sub_cat = $_POST['sub_cat'];
		$brand = $_POST['brand'];
		$quintity= $_POST['quintity'];
		$mrp= $_POST['mrp'];
		$descount= $_POST['descount'];
		$stock= $_POST['stock'];
		$specifaction= $_POST['specifaction'];
		if($_FILES['file']['error'][$key] == 0 && move_uploaded_file($_FILES['file']['tmp_name'][$key], "../files/{$images}")){
			$uploaded[]=$images;
			mysqli_query($con, "INSERT INTO images (name,url,title)VALUES ('".$name."','".$url."','".$title."')");
		}
	}
	mysqli_query($con, "INSERT INTO product (title,employee_id,cat_id,sub_cat,brand,quintity,mrp,descount,stock,specifaction) VALUES ('$title','$employee_id','$cat_id','$sub_cat','$brand','$quintity','$mrp','$descount','$stock','$specifaction')");
}else{
		$message = "All field is required";
	}
?>
<html>
<head>
<title>Upload Picture</title>
<link href="css/style.css" rel="stylesheet" type="text/css">



<!---------------  script start in direct sub catgory code ------>
 <?php 
include('db_con1.php'); 
$query_parent = mysql_query("SELECT * FROM category") or die("Query failed: ".mysql_error());
?>
  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="../img/loading.gif" alt="loading subcategory" /></div>');
		$.get('fun.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>

<!---------- end sub cat script ------------>
</head>
<body">

<div id="container">
	<div class="header">
    	<h1>My Album</h1>
    </div>
    <div class="content">
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                
				<table>
				<tr>
				<td>Product Title</td>
				<td><input type="text" name="title"></td>
				</tr>
				
					<tr>
				<td>Employee id</td>
				<td><input type="text" name="employee_id"></td>
				</tr>
				
				
				<tr>
				<td>Product Category</td>
				<td>
				
				 <select name="parent_cat" id="parent_cat" class="form-control">


	<option>Select a Categories</option>  
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category_name']; ?></option>
        <?php endwhile; ?>
    </select>
				
				</td>
				</tr>
				
				
					<tr>
				<td>Product sub Category</td>
				<td>
				 <select name="sub_cat" id="sub_cat" class="form-control">
<option>Select a sabCategories</option>

</select>
</td>	
</tr>
				
				
						<tr>
				<td>Product Brand</td>
				<td><input type="text" name="brand"></td>
				</tr>
				
				
						<tr>
				<td>Product Quntity</td>
				<td><input type="number" name="quintity"></td>
				</tr>
				
					<tr>
				<td>Product Mrp</td>
				<td><input type="text" name="mrp"></td>
				</tr>
				
				<tr>
				<td>Product Descount</td>
				<td><input type="text" name="descount"></td>
				</tr>
				
				<tr>
				<td>Product in stock</td>
				<td><select name="stock">
				<option>Select In stock</option>
				<option>Yes</option>
				<option>Sold Out</option>
				</select></td>
				</tr>
				
					<tr>
				<td>Product Specification</td>
				<td><textarea name="specifaction"></textarea></td>
				</tr>
				
					<tr>
				<td>Upload Picture</td>
				<td><input type="file" name="file[]" id="file" multiple="multiple" /></td>
				</tr>
				
				<tr>
				<td><input type="submit" id="submit" value="Upload"/></td>
				</tr>
				</table>
                   
                   
                   
                
            </form>
            <?php if(isset($message)){echo "<h2>$message</h2>";} ?>
        </div>
			<?php
                if(!empty($uploaded)){
                    foreach($uploaded as $images){
                        
                        echo "<div class='photo_holder'><a href='".$url."'><img src='../files/".$images."' height='200' width='200'></br> </a></div>";
                    }
                }
            ?>
    </div>
    <h5><a href="gallery.php">Done</a></h5>
    
</div>
</body>
</html>