<?php
include('../db_con.php');
session_start();
if(!isset($_SESSION['user_id'])){
header("location:login.php");
}
else{

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Aarohi</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		
		<script src="ckeditor-dev-major/ckeditor.js"></script>
	<script src="ckeditor-dev-major/samples/js/sample.js"></script>

	
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

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<?php include('includes/nav.php');?>
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<!------------ Side bar ------------------->
					<?php include('includes/sidebar.php'); ?>
					<!------------ end side bar ----------------->

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?id=<?php echo $id;?>">Home</a>
							</li>

							
							<li class="active">Category</li>
						</ul><!-- /.breadcrumb -->

					<?php include('includes/search.php');?>
					</div>

					<div class="page-content">
					
					<!------------- start setting --------------->
					<?php include('includes/setting.php');?>
					
						
						<!-- /.ace-settings-container -->
						
						
						
						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

									<div class="page-header">
							<h1>
							Add  Post
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
							 All Type News
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
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
				<td>Post Category</td>
				<td>
				
				 <select name="category" id="parent_cat" class="form-control">


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
<option>Select a sab Categories</option>

</select>
</td>	
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
        </div>
			
    </div>
    <h5><a href="post_view.php?id=<?php echo $id;?>">view Post</a></h5>
									
								<!----------- end add category ---------------->
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Arrohi</span>
							Shri kamtanath online software solutions. All rights Reserved | Design by Web.onlinepost
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
		 <?php
include('db_con1.php');
if(isset($_POST['submit']))
{
	$employee_id=$_POST['employee_id'];
	$Project_title=mysql_real_escape_string($_POST['project_title1']);
	$short_des=mysql_real_escape_string($_POST['short_des']);
	$keyworld=mysql_real_escape_string($_POST['keyworld']);
	$Project_discription=mysql_real_escape_string($_POST['Project_discription']);

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
 $sql = "insert into project_live_new(employee_id,Project_title,short_des,keyworld,Project_discription,category,sub_cat,image) values('$employee_id','$Project_title','$short_des','$keyworld','$Project_discription','$category','$sub_cat','$image')";
 
   if(mysql_query($sql))
{
echo "<script>alert('aded Your Post Successfully')</script>";
echo"<script>window.open('post2.php?id=".$employee_id."','_self')</script>";
}
}
}
?>

<script>
	initSample();
</script>
		
<script>
	initSample();
</script>
	
	</body>
</html>



<?php }?>
