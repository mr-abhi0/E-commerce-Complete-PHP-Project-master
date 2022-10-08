<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Aks shope | Order Cancel</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
  </head>
  <body> 
   <!-- wpf loader Two -->
  <!--------  <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> --------->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
  <?php include('includes/header_top.php')?>
    <!-- / header top  -->

    <!-- start header bottom  -->
  <?php include('includes/start_header.php');?>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
<?php include('includes/menu.php');?>
  <!-- / menu -->
  <!-- Start slider -->
<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row inner-bottom-sm">
			<div class="shopping-cart">
			   
				<div class="col-md-12 col-sm-12 shopping-cart-table ">
				     <br/>
			    
			    	<h3>Choose Cancel Method</h3>
			    	 <br/>
<?php
include('db_con1.php');
if(isset($_GET['id']))
{
$edit_id=$_GET['id'];
$edit_query="select *from orders where id='$edit_id'";
$run_edit=mysqli_query($con,$edit_query);
while($edit_row=mysqli_fetch_array($run_edit)){

$id=$edit_row['id'];
	 $userId=$edit_row['userId'];
$productId=$edit_row['productId'];	
$quantity=$edit_row['quantity'];
$orderDate=$edit_row['orderDate'];
$paymentMethod=$edit_row['paymentMethod'];
$orderStatus=$edit_row['orderStatus'];


?>

	<div class="table-responsive">
<form action="savecancel_order.php"  method="post">	

		<table class="table table-bordered">
		<tr>
		<td>Last Login IP Address</td>
				<td><input type="text" name="ipaddress"  value="<?php

echo $_SERVER["REMOTE_ADDR"]; ?>" readonly>
		</tr>
		<tr>
		    <td>Product Id</td>
		     <td><input type="text" name="order_id" value="<?php echo $edit_row['id'];?>" readonly> </td>
		    
		</tr>
		
			<tr>
			    <td>Reason For Order Cancel</td>
		    <td><select name="cancel_order">
		          <option>Select Reason</option>
		        <option value="Price Issue"> Price Issue</option>
		         <option value="Color Issue"> Color Issue</option>
		          <option value="Order Payment Not Done"> Order Payment Not Done </option>
		           <option value="Any Other Issue"> Any Other Issue </option>
		            
		        
		    </select></td>
		     
		    
		</tr>
				
	
	<tr>
	    
	    <td>Sms Remark</td>
	     <td><textarea name="sms"></textarea></td>
	</tr>
	
	
		
	<tr>
	    
	    <td>Are You Sure You To Want to Cancel The Order? Press Submit Button</td>
	     <td><input type="submit" name="submit" Valur="submit"></td>
	</tr>
		</table><!-- /table -->
			</form>
	</div>
	<?php }}?>
</div>

		</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
	

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
   <?php include('includes/popular_product.php');?>
  <!-- / popular section -->
  <!-- Support section -->
   <?php include('includes/support_sectioon.php');?>
 
  <!-- / Support section -->
 


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p></p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
<?php include('includes/footer.php');?>
  <!-- / footer -->


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>
<?php }?>