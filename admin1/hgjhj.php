<?php
session_start();
if(!isset($_SESSION['user_id'])){
header("location:../index.php");
}
else{

?>

<!DOCTYPE html>
<?php 
include('db_con.php'); 
 ?>
<html>
<head>
<title>Total Event Marketing pvt ltd</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   
   <div id="hedfirst">
   

   </div>
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				
				<!-------------- start top batr hedder nav bar --------------------->
							<?php include('nav.php'); ?>
<!--------------- end nav bar tob lavel ------------------->
				
    
        <!-- /.navbar-static-top -->


		
	
	<!----------------- side bar navegation bar -------------------->

	<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="personal_info.php"><img src="images/logo2.png" width="100" height="60">
							<br/>
								<h6>Total Event Marketing Pvt Ltd </h6>
								</a>
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                               <div class="menu">
									<ul id="menu">
										<li><a href="personal_info.php?id=<?php echo $id; ?>"><i class="fa fa-tachometer"></i> <span>Home</span><div class="clearfix"></div></a></li>
										
										   <li id="menu-academico" ><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Attendance</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="attendance_s.php?id=<?php echo $id;?>">Get Attendance</a></li>
											<li id="menu-academico-avaliacoes" ><a href="attendance_mis.php?id=<?php echo $id; ?>">Attendence Mis</a></li>
											<li id="menu-academico-avaliacoes" ><a href="request_att.php?id=<?php echo $id; ?>">Request Attendance</a></li>
											<li id="menu-academico-avaliacoes" ><a href="report_att.php?id=<?php echo $id; ?>">Attendance Report</a></li>
										  </ul>
										</li>
										
										
											 <li id="menu-academico" ><a href="#"><i class="fa fa-plane" aria-hidden="true"></i><span> Leave Application</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="leav.php?id=<?php echo $id;?>">Leave Request</a></li>
											<li id="menu-academico-avaliacoes" ><a href="leav_mis.php?id=<?php echo $id;?>">Leave Mis</a></li>
										  </ul>
										</li>
														
													
									 <li id="menu-academico" ><a href="#"><i class="fa fa-globe" aria-hidden="true"></i><span>Project live</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="project_live.php?id=<?php echo $id; ?>">View All Project</a></li>
											<li id="menu-academico-avaliacoes" ><a href="add_project.php?id=<?php echo $id; ?>">Add New Live Project</a></li>
											
										  </ul>
										</li>
									 
								
								
									
								
									<!----------------<li id="menu-academico" ><a href="errorpage.html"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Leave Application</span><div class="clearfix"></div></a></li> ------------------->
									 	 <li id="menu-academico" ><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>Message </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="inbox.php?id=<?php echo $id; ?>">Inbox</a></li>
											<li id="menu-academico-avaliacoes" ><a href="sent_box.php?id=<?php echo $id; ?>">Send Box</a></li>
									
										  </ul>
										</li>	 
									

											 <li id="menu-academico" ><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="gallery.php?id=<?php echo $id; ?>">Tem Gallery</a></li>
											<li id="menu-academico-avaliacoes" ><a href="">Add Gallery Image</a></li>
											<li id="menu-academico-avaliacoes" ><a href="">Show Gallery Image</a></li>
										  </ul>
										</li>
									
										
										
										
											 <li id="menu-academico" ><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Employee Pay Slip</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="">Find Slip</a></li>
											<li id="menu-academico-avaliacoes" ><a href="">Account Summary</a></li>
											<li id="menu-academico-avaliacoes" ><a href="">Account Summary Request </a></li>
										  </ul>
										</li>
									
									<li><a href="view_allemp.php?id=<?php echo $id; ?>"><i class="fa fa-tachometer"></i> <span>View All Employee</span><div class="clearfix"></div></a></li>
									
			
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<!-------------- end nave bar ----------------->
							
							
        <div id="page-wrapper">
            
            <!-- /.row -->
	
   <div class=""style="width:500px;">
         <b style="color:#fff;"><b style="color:#fff; font-size:25px;"> <center>&nbsp;</b></center></b>
                       
<div class="agileinfo-grap">
<div class="agileits-box">
 	 
 	
                    <div class="panel-default" >
                     <div class="panel-heading" style="background-color:#46b8da;">
					
                     </div>
					   	<div class="row">            </div>
						</br></br>
                <!--   <div class="col-lg-12">
                   <center> <h1 class="page-header">Personal Information</h1></center>
                </div> -->
                <!-- /.col-lg-12 -->
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
			
                <!-- /.col-lg-12 -->
		
		
	
				
		<div class="row">
            	
				
                        <!-- /.panel-heading -->
						
						
						
                        <!-- /.panel-body -->
                    	
						 <div class="col-md-1">
						 </br>
						 &nbsp;
						 </div>
						 
					</div>
					</div>
	
	
	

                        <!-- /.panel-body -->

                    </div>
                    </div>
                    </div>
					
					
					
					
					
					
					
					
					
                    </div>
	
	
	
            
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<!-- Button trigger modal -->

<!-- Modal -->







    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Personal Information</h4>
      </div>
	  <form action="add_personal_info.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Sex:</span>
												<select name="sex" class="form-control input-sm">
												<option></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<textarea name="residential_address" class="form-control input-sm"  rows="1"/></textarea>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<textarea name="permanent_address"  class="form-control input-sm"  rows="1"> </textarea>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Civil Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal" >
															<option value=""></option>
															<option value="Male">Single</option>
															<option value="Married">Married</option>
															<option value="Annulled">Annulled</option>
															<option value="Widowed">Widowed</option>
															<option value="Seperated">Seperated</option>
															<option value="Others">Others, specify</option>
														</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Height:</span>
												<input type="text" name="height" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" name="gsis_id_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text" name="philhealth_no" class="form-control input-sm" />
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm" >Image Upload.:</span>
												<input type="file" name="file" id="file"  class="btn btn-outline btn-success">
											</div>
									</div>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm" />
											</DIV>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="date_of_birth" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="ra_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code::</span>
												<input type="text" name="pa_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" name="citizenship" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" name="weight" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text" name="agency_employee_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="cis_no" name="cis_no" class="form-control input-sm" />
											</div>
											
													<?php		
													$query=("SELECT employee_id FROM personal_information ORDER BY employee_id DESC LIMIT 1");
																$result = $mysqli->query($query);
																
															while(	$rowp = $result->fetch_array(MYSQLI_ASSOC))
															{
											
											?>
												<input type="hidden" name="employee_id" value="<?php echo $rowp['employee_id']; ?>"  style="display:none;" />
											<?php }?>
									</DIV>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm" />
												</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Extensions:</span>
												<input type="text" name="surname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" name="place_birth" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="ra_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="pa_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="email_address" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" name="bloodtype" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" name="cellphone_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" name="tin" class="form-control input-sm" />
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" name="sss_no" class="form-control input-sm" />
											</div>	
											
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Pag-ibig No.:</span>
												<input type="text" name="pag_ibig_id_no" class="form-control input-sm" />
											</div>	
									
											
											
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="user_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:500px;min-height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><strong><center>USER ACCOUNT</center></strong></h4>
      </div>
	  <form action="add_user.php" method="POST" >
      <div class="modal-body"style="width:500px;height:300px;overflow:hidden">
<div class="col-lg-12">

	<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
										</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm" />
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm" />
											</div>	
											</div>	
											</div>
												<div class="row">
											<div class="col-lg-6">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Extensions:</span>
												<input type="text" name="ext" class="form-control input-sm" />
																											<?php	
		$emp=(" select * from personal_information order by employee_id asc") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		$id=$show['employee_id'];
		
	?>
												<input type="hidden" name="employee_id" class="form-control input-sm" value="<?php echo $id;?>" />
											
											</div>	
											</div>	
											</div>
											</br>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="username" class="form-control input-sm" />
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Password:</span>
												<input type="password" name="password" class="form-control input-sm" />
											</div>	
											</div>	
											</div>	
											
												
											
											
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade " id="asdas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:500px;height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><strong><center>USER ACCOUNT</center></strong></h4>
      </div>
	  <form action="add_user.php" method="POST" >
      <div class="modal-body"style="width:500px;height:100px;overflow:hidden">
<div class="col-lg-12">
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="username" class="form-control input-sm" />
												<input type="hidden" name="sex" class="form-control input-sm" value=" " />
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Password:</span>
												<input type="password" name="password" class="form-control input-sm" />
											</div>	
											</div>	
											</div>	
									
											
											
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>

</html>
<?php }?>