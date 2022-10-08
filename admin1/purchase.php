<?php
include('../db_con.php');
session_start();
if(!isset($_SESSION['user_id'])){
header("location:../login/index.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Tis Online</title>

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

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<script src="tinymce/tinymce.min.js"></script>
		<script src="tinymce/jquery.tinymce.min.js"></script>
		 <script>tinymce.init({ selector:'textarea' });</script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		
		<!---------------  script start in direct sub catgory code ------>
 <?php 
include('db_con1.php'); 
$query_parent = mysql_query("SELECT * FROM vender_name") or die("Query failed: ".mysql_error());
?>
  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="../img/loading.gif" alt="loading subcategory" /></div>');
		$.get('fun_vender.php?parent_cat=' + $(this).val(), function(data) {
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
							Add  Product
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
							 all type product
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								 <form action="aad_purchase.php" method="post" enctype="multipart/form-data">
                
				<table style="padding: 20px;">
				<tr>
				<td>Product Title</td>
				<td><input type="text" name="title" size="100%">
				<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
				
				</td>
				</tr>
				
			
			
				
			
				
				<tr>
				<td>Vender Name</td>
				<td>
				
				 <select name="vender_id" id="parent_cat" class="form-control">


	<option>Select a Vender Name</option>  
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category_name']; ?></option>
        <?php endwhile; ?>
    </select>
				
				</td>
				</tr>
				
				
					<tr>
				<td>Purchse product List</td>
				<td>
				 <select name="product_list" id="sub_cat" class="form-control">
<option>Select a Product</option>

</select>
</td>	
</tr>
				
				
						<tr>
				<td>Product Brand (Customer name)</td>
				<td><input type="text" name="brand" size="100%"></td>
				</tr>
				
				
						<tr>
				<td>Product Quntity</td>
				<td><input type="number" name="quintity" size="100%"></td>
				</tr>
				
					<tr>
				<td>Product our Purchse Price</td>
				<td><input type="text" name="price_our" size="100%"></td>
				</tr>
				
				<tr>
				<td>Product Sales Price</td>
				<td><input type="text" name="sales_price" Size="100%"></td>
				</tr>
				
								<tr>
				<td>Bike and Other option Amount</td>
				<td><input type="number" name="bike" Size="100%"></td>
				</tr>
				
				
				<tr>
				<td>Product Profit</td>
				<td><input type="number" name="profit" Size="100%"></td>
				</tr>
				
				<tr>
				<td>Product Los</td>
				<td><input type="number" name="los" Size="100%"></td>
				</tr>
				
				<tr>
				<td>Product Delivered Date</td>
				<td><input type="date" name="done_date" Size="100%"></td>
				</tr>
				
				
				<tr>
				<td>Product in Status</td>
				<td><select name="status">
				<option>Select In stock</option>
				<option>Prosess work For Vender</option>
				<option>Dispatch Product For Customer</option>
				<option>Delivered</option>
				</select></td>
				</tr>
				
				
					<tr>
				<td>Product Specification (How Much Product)</td>
				<td><textarea name="specifaction"></textarea></td>
				</tr>
				
					<tr>
				<td>Upload Sample</td>
				<td><input type="file" name="image" /></td>
				</tr>
				
				<tr>
				<td><input type="submit"  name="submit" value="Save Data"/></td>
				</tr>
				</table>
                   
                   
                   
                
            </form>
            
        </div>

    </div>
<!-----<h5><a href="product_view.php?id=<?php echo $id;?>">Done/ view Product</a></h5>  --------->
									
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
							<span class="blue bolder">City Printing Enterprise</span>
							Application &copy; 2018
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

	
	</body>
</html>



<?php }?>
