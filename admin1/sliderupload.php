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
							Add  slider
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
							 All Type Slider
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
		<form action="ad_slider.php" method="post" enctype="multipart/form-data" media="all">

                
				<table>
				<tr>
				<td>Slider Title</td>
				<td><input type="text" name="slider_title1" size="100%">
				<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
				
				</td>
				</tr>
				
					<tr>
				<td>Short Title</td>
				<td><input type="text" name="short_des" size="100%">
				</td>
				</tr>
					<tr>
				<td>Slider Page Url</td>
				<td><input type="text" name="page_url" size="100%">
				</td>
				</tr>
				
				
				     <tr>
						  <td>slider Image</td>
						  <td><input type="file" name="image" ></td>
						  </tr>
				<tr>
				<td><input type="submit" name="submit" value="submit"/></td>
				</tr>
				</table>
                   
                   
                   
                
            </form>

        </div>
			
    </div>
  
									
								<!----------- end add category ---------------->
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->



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
<script>
	initSample();
</script>
	
	</body>
</html>



<?php }?>
