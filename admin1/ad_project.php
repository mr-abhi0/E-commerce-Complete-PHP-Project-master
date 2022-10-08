<html>
<head>
<title>Total Event Marketing Pvt. Ltd.</title>
<script src="ckeditor-dev-major/ckeditor.js"></script>
	<script src="ckeditor-dev-major/samples/js/sample.js"></script>
</head>
<body>
<h1>Add The Total Event Marketing User Says</h1>
<form method="post" action="?" enctype="multipart/form-data" media="all">			
									<table id="table">
					<tr>
						<th colspan="4">Insert new Live Project</th>
					</tr>
					<tr>
						<td><input type="hidden" name="employee_id" class="form-control input-sm" value="1" ></td>
					
					</tr>
					<td></td>
						  <tr>
						  <td>Project Title</td>
						  <td><input type="text" name="project_title1" size="50"></td>
						  </tr>
						  
						    <tr>
						  <td>Short Discription</td>
						  <td><!------<textarea name="short"></textarea>------->
						  <input type="text" name="short_des" size="50">
						  </td>
						  </tr>
						  
						   
						    <tr>
						  <td>Keywords</td>
						  <td><!------<textarea name="short"></textarea>------->
						  <input type="text" name="keyworld" size="50">
						  </td>
						  </tr>
						  
						  
						      <tr>
						  <td>Author name</td>
						  <td><input type="text" name="authorname" size="50"></td>
						  </tr>
						  
						    
						 
						      <tr>
						  <td>Category</td>
						  <td><select name="category">
						  <option value="select_cat">Select Cat</option>
						  <option value="sport">sport</option>
						  <option value="news">news</option>
						  <option value="other">other</option>
						  </select></td>
						  </tr>
						  
						       <tr>
						  <td> Sub Category</td>
						  <td><select name="sub_cat">
						  <option value="select">Select sub Category</option>
						  <option value="sport">sport</option>
						  <option value="news">news</option>
						  <option value="other">other</option>
						  </select></td>
						  </tr>
						  
						  
						  
						  
						       <tr>
						  <td>Project Discription</td>
						  
						  
						  
						  <td><textarea  id="editor"  col="2" rows="5" name="Project_discription"></textarea></td>
						  </tr>
						  
						         <tr>
						  <td>Project Image/pdf</td>
						  <td><input type="file" name="image" ></td>
						  </tr>
						  <tr>
						  <td>
						  please save this project
						  </td>
						  <td>
<input type="submit" value="Upload Data" name="submit">
</td>
						  </tr>
					
						
					
						
					  </table>
					  
					  </form>
  <?php
include('db_con1.php');
if(isset($_POST['submit']))
{
	$employee_id=$_POST['employee_id'];
	$Project_title=mysql_real_escape_string($_POST['project_title1']);
	$short_des=mysql_real_escape_string($_POST['short_des']);
	$keyworld=mysql_real_escape_string($_POST['keyworld']);
	$Project_discription=mysql_real_escape_string($_POST['Project_discription']);
	$authorname=mysql_real_escape_string($_POST['authorname']);
	$category=mysql_real_escape_string($_POST['category']);
	$sub_cat=mysql_real_escape_string($_POST['sub_cat']);
	
$image=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
if($Project_title=='')
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
 $sql = "insert into project_live_new(employee_id,Project_title,short_des,keyworld,Project_discription,authorname,category,sub_cat,image) values('$employee_id','$Project_title','$short_des','$keyworld','$Project_discription','$authorname','$category','$sub_cat','$image')";
 
   if(mysql_query($sql))
{
echo "<script>alert('aded Your Post Successfully')</script>";
echo"<script>window.open('project_live1.php?id=".$employee_id."','_self')</script>";
}
}
}
?>

<script>
	initSample();
</script>
</body>
</html>
