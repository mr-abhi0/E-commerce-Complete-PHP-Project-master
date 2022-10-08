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
<script src="tinymce/tinymce.min.js"></script>
		<script src="tinymce/jquery.tinymce.min.js"></script>
		 <script>tinymce.init({ selector:'textarea' });</script>
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
							Provide Amount For Vender
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								AMOUNT STATUS
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form action="aadvender_prodcut.php" class="form-horizontal"   method="post">
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Vender Name </label>

										<div class="col-sm-9">
											
											<input type="hidden"  name="employeeid" value="<?php echo $show['employee_id']; ?>"  placeholder="mobile" class="col-xs-10 col-sm-5" />
											<select name="vender_names">
											<option>Select a Vender Name</option>
												<?php
include('ddb.php');
$get_query="select *from vender_name";
$run=mysqli_query($con,$get_query);
while($row=mysqli_fetch_array($run)){
$cat_id=$row['cat_id'];
$category_name=$row['category_name'];

echo"<option value='$cat_id'>$category_name</option>";
}
			?>
			
											
											</select>
				
									</div>
						
									</div>
									
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Invoice Number *</label>

										<div class="col-sm-9">
											
										
											<input type="text"  name="invoice_number"  placeholder="011,0021,etc." class="col-xs-10 col-sm-5" required />
										
										
										
									</div>
						
									</div>
									
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Name *</label>

										<div class="col-sm-9">
											
										
											<input type="text"  name="product_name"  placeholder="flax,vinayl,t-shirt,etc." class="col-xs-10 col-sm-5"required />
										
									</div>
									
									
									
						
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Amount *</label>

										<div class="col-sm-9">
											
										
											<input type="text"  name="amount"  placeholder="2000,300,100,etc." class="col-xs-10 col-sm-5" required />
										
										
										
									</div>
						
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Amount Type *</label>

										<div class="col-sm-9">
											
										
											<select name="amount_type">
											<option value="case">Select Pyament Method</option>
											<option value="case">Case</option>
											<option value="Chaick">Chaick</option>
											<option value="Net Banking">Net Banking</option>
											<option value="Paytm">Paytm</option>
											</select>
										
										
										
									</div>
						
									</div>
									
									
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pyament By Employee</label>

										<div class="col-sm-9">
											
										
											<input type="text"  name="by_employee"  placeholder="sagar,sunil,rohit,etc." class="col-xs-10 col-sm-5" required />
										
										
										
									</div>
						
									</div>
									
									
										
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Remanining Amount *</label>

										<div class="col-sm-9">
											
										
											<input type="text"  name="remaing_amount"  placeholder="if remaining amount,other no-etc." class="col-xs-10 col-sm-5" required />
										
										
										
									</div>
						
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Closing Amount *</label>

										<div class="col-sm-9">
											
										
											<input type="text"  name="closing_amount"  placeholder="0,100,200,if remaing amount,other wise value is 0. " class="col-xs-10 col-sm-5" required />
										
										
										
									</div>
						
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Amount  Status *</label>

										<div class="col-sm-9">
											
										
											<select name="amount_status">
											<option value="">Select Status</option>
											<option value="0">pending</option>
											<option value="1">Done</option>
										
											</select>
										
										
										
									</div>
						
									</div>
									
									
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Other Remark *</label>

										<div class="col-sm-9">
											
										
											<textarea  name="other_remark" placeholder="Optional">
										</textarea>
										
										
									</div>
						
									</div>
									
						

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" name="submit">
												
											
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
									

									<div class="hr hr-24"></div>
</form>
								
							
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
							<span class="blue bolder">Tis online</span>
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

		<!-- inline scripts related to this page -->
	</body>
</html>



<?php }?>
