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
		<title>Dashboard - User Account</title>

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

  <script type="text/javascript" src="js/jquery.js"></script>


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
							Add  Employee City printing
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
							 Create Employee
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
						<?php
					$id=$_GET['id'];  
				   		


		$emp=(" 
	select		personal_information.employee_id,
				personal_information.firstname,
				personal_information.middlename,
				personal_information.surname,
				personal_information.member_id,
				personal_information.sex,
				personal_information.civil_status,
				personal_information.department,
				personal_information.image,
				personal_information.cis_no,
			
				user.employee_id,
				user.username
	
				
		
	
FROM personal_information
 JOIN user 
ON personal_information.employee_id=user.employee_id  where personal_information.employee_id=".$id." ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$result = $fetch_res->fetch_array(MYSQLI_ASSOC);
		
		
	
		
	?><div class="agile-grids">	
				<!-- tables -->
					    <table id="table">
					  <tr>
					  <td>
			 <center> <strong> <?php echo $result['firstname']." ".$result['surname'];  ?> </strong>You are now officially registered in the system</center>
			
			</td>
			</tr>
			<tr>
			<td>
			<strong >
			<center> Username:  <?php echo $result['username'];  ?> </center>
			<center>  Member ID: <?php echo $result['member_id'];  ?> </center>
			</strong>
          <td>
		  </tr>
		   </table>
            
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
