<?php
include('../db_con.php');
session_start();
if(!isset($_SESSION['user_id'])){
header("location:../login/index.php");
}
else{

?>


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

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		
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
								 <form role="form"  action="" method="post" enctype="multipart/from-data" media="all">
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Title </label>

										<div class="col-sm-9">
										<input type="hidden"  name="employee_id" value="<?php echo $show['employee_id']; ?>"  placeholder="mobile" class="col-xs-10 col-sm-5" />
											<input type="text"  name="title"  placeholder="mobile redmi" class="col-xs-10 col-sm-5" />
										
									</div>
						
									</div>

									
									
									<!----------- start category ------------->
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Category </label>

										<div class="col-sm-9">
											
											
											 <select name="parent_cat" id="parent_cat" >


	<option>Select a Categories</option>  
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category_name']; ?></option>
        <?php endwhile; ?>
    </select>
				
									</div>
									</div>
									<!------------- end category ------------->
									
									<!------------- start sub category ------------->
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product sub Category </label>

										<div class="col-sm-9">
											
											 <select name="sub_cat" id="sub_cat">
											<option>Select a sabCategories</option>

											</select>
										
									</div>
						
									</div>
									<!--------- end sub category--------->
						
						
						
							<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Brand </label>

										<div class="col-sm-9">
										
											<input type="text"  name="brand"  placeholder="hp" class="col-xs-10 col-sm-5" />
										
									</div>
						
									</div>

									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Quantity </label>

										<div class="col-sm-9">
										
											<input type="text"  name="quintity"  placeholder="1" class="col-xs-10 col-sm-5" />
										
									</div>
						
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Mrp </label>

										<div class="col-sm-9">
										
											<input type="text"  name="mrp"  placeholder="2300" class="col-xs-10 col-sm-5" />
										
									</div>
						
									</div>
									
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Discount </label>

										<div class="col-sm-9">
										
											<input type="text"  name="descount"  placeholder="10%" class="col-xs-10 col-sm-5" />
										
									</div>
						
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product In Stock </label>

										<div class="col-sm-9">
										
											<select name="stock">
				<option>Select In stock</option>
				<option>Yes</option>
				<option>Sold Out</option>
				</select>
										
									</div>
						
									</div>
									
									
									
										<div class="form-group">
									
									<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<h4 class="header green clearfix">
									Product Specification
									<span class="block pull-right">
										<small class="grey middle">Choose style: &nbsp;</small>

										<span class="btn-toolbar inline middle no-margin">
											<span data-toggle="buttons" class="btn-group no-margin">
												<label class="btn btn-sm btn-yellow">
													1
													<input type="radio" value="1" />
												</label>

												<label class="btn btn-sm btn-yellow active">
													2
													<input type="radio" value="2" />
												</label>

												<label class="btn btn-sm btn-yellow">
													3
													<input type="radio" value="3" />
												</label>

												<label class="btn btn-sm btn-yellow">
													4
													<input type="radio" value="4" />
												</label>
											</span>
										</span>
									</span>
								</h4>

								<div class="wysiwyg-editor" id="editor1" name="specifaction"></div>

								<div class="hr hr-double dotted"></div>

								<!------------- end pagess contant  text area----------------->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						
									</div>
									
									
												<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Upload Picture </label>

										<div class="col-sm-9">
										
										<input type="file" name="file[]" id="file" multiple="multiple" />
										
									</div>
						
									</div>
									
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										<input type="submit" id="submit" class="btn btn-info" value="Upload"/>
										
												
											
										

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
									

									<div class="hr hr-24"></div>
</form>
								
								   <?php if(isset($message)){echo "<h2>$message</h2>";} ?>
								<?php
                if(!empty($uploaded)){
                    foreach($uploaded as $images){
                        
                        echo "<div class='photo_holder'><a href='".$url."'><img src='../files/".$images."' height='200' width='200'></br> </a></div>";
                    }
                }
            ?>
								<!-------------- start dispaly data by category --------------->
								
								<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th>Id</th>
													<th>cat id</th>
													<th>Category Name</th>
													
													

													<th class="hidden-480">Status</th>

												</tr>
											</thead>

											<tbody>
																			
											
											<?php
include('db_con1.php');
$select_query="select *from sab_categories ORDER BY s_id ASC";
$run_query=mysql_query($select_query);
while($row=(mysql_fetch_array($run_query)))
{			
$s_id=$row['s_id'];
$cat_id=$row['cat_id'];
$sab_title=$row['sab_title'];


	?>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

												
<td>
														<a href="#"><?php echo $s_id;?></a>
													</td>
													<td>
														<a href="#"><?php echo $cat_id;?></a>
													</td>
													<td><?php echo $sab_title;?></td>
													
												
												

												
													<td>
														<div class="hidden-sm hidden-xs btn-group">
														
														

													
																	<a href="delete_sub_category.php?del=<?php echo $s_id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
															
														

															
														</div>

														
															
															

													
													</td>
												</tr>

<?php }?>
										
											
											</tbody>
										</table>
									<!------------- end desplay category -------------------->
									
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
<!-- page specific plugin scripts  text aditar -->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/markdown.min.js"></script>
		<script src="assets/js/bootstrap-markdown.min.js"></script>
		<script src="assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/bootbox.js"></script>

		<!---------- end text aditor pages-------->
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
			<!---------- Start text aditor pages-------->
		<script type="text/javascript">
			jQuery(function($){
	
	$('textarea[data-provide="markdown"]').each(function(){
        var $this = $(this);

		if ($this.data('markdown')) {
		  $this.data('markdown').showEditor();
		}
		else $this.markdown()
		
		$this.parent().find('.btn').addClass('btn-white');
    })
	
	
	
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			//console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	}

	//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

	//but we want to change a few buttons colors for the third style
	$('#editor1').ace_wysiwyg({
		toolbar:
		[
			'font',
			null,
			'fontSize',
			null,
			{name:'bold', className:'btn-info'},
			{name:'italic', className:'btn-info'},
			{name:'strikethrough', className:'btn-info'},
			{name:'underline', className:'btn-info'},
			null,
			{name:'insertunorderedlist', className:'btn-success'},
			{name:'insertorderedlist', className:'btn-success'},
			{name:'outdent', className:'btn-purple'},
			{name:'indent', className:'btn-purple'},
			null,
			{name:'justifyleft', className:'btn-primary'},
			{name:'justifycenter', className:'btn-primary'},
			{name:'justifyright', className:'btn-primary'},
			{name:'justifyfull', className:'btn-inverse'},
			null,
			{name:'createLink', className:'btn-pink'},
			{name:'unlink', className:'btn-pink'},
			null,
			{name:'insertImage', className:'btn-success'},
			null,
			'foreColor',
			null,
			{name:'undo', className:'btn-grey'},
			{name:'redo', className:'btn-grey'}
		],
		'wysiwyg': {
			fileUploadError: showErrorAlert
		}
	}).prev().addClass('wysiwyg-style2');

	
	/**
	//make the editor have all the available height
	$(window).on('resize.editor', function() {
		var offset = $('#editor1').parent().offset();
		var winHeight =  $(this).height();
		
		$('#editor1').css({'height':winHeight - offset.top - 10, 'max-height': 'none'});
	}).triggerHandler('resize.editor');
	*/
	

	$('#editor2').css({'height':'200px'}).ace_wysiwyg({
		toolbar_place: function(toolbar) {
			return $(this).closest('.widget-box')
			       .find('.widget-header').prepend(toolbar)
				   .find('.wysiwyg-toolbar').addClass('inline');
		},
		toolbar:
		[
			'bold',
			{name:'italic' , title:'Change Title!', icon: 'ace-icon fa fa-leaf'},
			'strikethrough',
			null,
			'insertunorderedlist',
			'insertorderedlist',
			null,
			'justifyleft',
			'justifycenter',
			'justifyright'
		],
		speech_button: false
	});
	
	


	$('[data-toggle="buttons"] .btn').on('click', function(e){
		var target = $(this).find('input[type=radio]');
		var which = parseInt(target.val());
		var toolbar = $('#editor1').prev().get(0);
		if(which >= 1 && which <= 4) {
			toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
			if(which == 1) $(toolbar).addClass('wysiwyg-style1');
			else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
			if(which == 4) {
				$(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
			} else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
		}
	});


	

	//RESIZE IMAGE
	
	//Add Image Resize Functionality to Chrome and Safari
	//webkit browsers don't have image resize functionality when content is editable
	//so let's add something using jQuery UI resizable
	//another option would be opening a dialog for user to enter dimensions.
	if ( typeof jQuery.ui !== 'undefined' && ace.vars['webkit'] ) {
		
		var lastResizableImg = null;
		function destroyResizable() {
			if(lastResizableImg == null) return;
			lastResizableImg.resizable( "destroy" );
			lastResizableImg.removeData('resizable');
			lastResizableImg = null;
		}

		var enableImageResize = function() {
			$('.wysiwyg-editor')
			.on('mousedown', function(e) {
				var target = $(e.target);
				if( e.target instanceof HTMLImageElement ) {
					if( !target.data('resizable') ) {
						target.resizable({
							aspectRatio: e.target.width / e.target.height,
						});
						target.data('resizable', true);
						
						if( lastResizableImg != null ) {
							//disable previous resizable image
							lastResizableImg.resizable( "destroy" );
							lastResizableImg.removeData('resizable');
						}
						lastResizableImg = target;
					}
				}
			})
			.on('click', function(e) {
				if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
					destroyResizable();
				}
			})
			.on('keydown', function() {
				destroyResizable();
			});
	    }

		enableImageResize();

		/**
		//or we can load the jQuery UI dynamically only if needed
		if (typeof jQuery.ui !== 'undefined') enableImageResize();
		else {//load jQuery UI if not loaded
			//in Ace demo ./components will be replaced by correct components path
			$.getScript("assets/js/jquery-ui.custom.min.js", function(data, textStatus, jqxhr) {
				enableImageResize()
			});
		}
		*/
	}


});
		</script>
			<!---------- Start text aditor pages-------->
	</body>
</html>



<?php }?>
