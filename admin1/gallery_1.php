<?php
session_start();
if(!isset($_SESSION['user_id'])){
header("location:../index.php");
}
else{

?>

<!DOCTYPE HTML>
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
<!---------- start image gallery ------------->
<link href="css1/reset.css" rel="stylesheet" type="text/css">
<link href="css1/style.css" rel="stylesheet" type="text/css">
<!--------- image gallery ----------------->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">
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
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
									<?php include('nav.php'); ?>

<div class="agile3-grids">
	
			<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100px;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
	$("#folder_"+id+">img#1").fadeIn(200);
	});
sliderint=1;
sliderNext=2;

function startSlider(id){
	count=$("#folder_"+id+">img").size();
	
	loop = setInterval(function(){
		
		if(sliderNext>count){
			sliderNext=1;
			sliderint=1;
		}
		
		$("#folder_"+id+">img").fadeOut(100);
		$("#folder_"+id+">img#"+sliderNext).fadeIn(200);
		
		sliderint=sliderNext;
		sliderNext=sliderNext+1;
		},2000)
}
function stopLoop(){
	window.clearInterval(loop);
}
$('.folder_holder').hover(
	function(){
		var id = ($(this).attr('id'));
		startSlider(id);
	},function(){
		stopLoop();
	}
);
</script>

    <div class="content">
    	<div class="content_head">
    	<h2>Albums</h2>
        <h5><a href="create_album.php"><strong style="font-size:12px;">+ Create Album</strong></a></h5>
        </div>
        <div id="album_wrapper">
        <?php
       $con=mysqli_connect("localhost","temgloba_rohit","rohit1995","temgloba_employee");
                    // Check connection
                    if (mysqli_connect_errno())
                      {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }
                $result = mysqli_query($con, "SELECT * FROM folders");
                while($row = mysqli_fetch_array($result)){
				$title = $row['title'];
				$id = $row['id'];
				echo "<div class='folder_holder' id=". $id .">";
				echo "<a href='photos.php?title=".$title."'><div class='folder_holder_img' id='folder_".$id."'>";
						
						$result_p = mysqli_query($con, "SELECT * FROM images WHERE title = '$title'");
						$rowno=mysqli_num_rows($result_p);
						for ($i=1; $i < mysqli_num_rows($result_p); $i++){
							$row_p = mysqli_fetch_array($result_p);
								echo "<img id='". $i . "' src='". $row_p['url'] ."' width='94' height='100' class=''>";	
						}
				echo "</div></a>";
                echo "<h3><a href='photos.php?title=".$title."'>".$title."</a></h3>"; 
				echo "<h4>".$rowno." photos</h4>";
            	echo "</div>";
				}
        ?>
        </div>
	</div>
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>

	<!---------- end image gallery ----------------------->
	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->

<!---------------
<div class="copyrights">
   <div id="chat"style="position:relative; float:right;" >
 <a href="chat1/index.php?id=<?php echo $id; ?>"><span><button type="button">Chat With US!</button> </span>
<img src="images/1481809519_chat-g.png" width="50" height="50" ></a>
</div>
	<span> <p>© 2016 Employee Portal. All Rights Reserved | Design by  <a href="http://wwww.temglobal.com" target="_blank">Temglobal.com</a> </p></span>
	
</div>	


------------------------->
		
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
	<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="personal_info.php"><img src="images/logo2.png" width="100" height="60">
							<br/>
								<strong style="font-size:12px;">Total Event Marketing Pvt Ltd </strong>
								</a>
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                              <div class="menu">
									<ul id="menu" >
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
									<li><a href="contact_us.php?id=<?php echo $id; ?>"><i class="glyphicon glyphicon-phone-alt"></i> <span>Contact Us</span><div class="clearfix"></div></a></li>
									
								
									
								
			
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							
							<!-------------- end side bar navegation bar ---------------------->
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
	

	
</body>
</html>
<?php }?>