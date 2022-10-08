<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM project_live WHERE id_live={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id_live']]=array("quantity" => 1, "price" => $row_p['price']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Aks shope | Product</title>
    
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
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

  </head>
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">  
   <!-- wpf loader Two -->
    <!---- <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> ---->
    <!-- / wpf loader Two -->       
 <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
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

 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/baby.jpg" alt="" style="height:300px;width:100%;">
      <!---- <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Mobile Accessories</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
        
        </ol>
      </div>
     </div>
   </div>---------->
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
             <!----  <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>----->
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
		
  <?php include('db_cons.php');
	if(isset($_GET['cid']))
			{
			$category=$_GET['cid'];
$select="select *from project_live WHERE category=".$category.";";
$run_query=mysqli_query($con,$select);
while($row=mysqli_fetch_array($run_query))
{
		 $id_live=$row['id_live'];
	 $employee_id=$row['employee_id'];
$Project_title=$row['Project_title'];	
$image=$row['image'];	
$Project_discription=$row['Project_discription'];
$status=$row['status'];
$short_des=$row['short_des'];
$keyworld=$row['keyworld'];
$authorname=$row['authorname'];
$category=$row['category'];
$sub_cat=$row['sub_cat'];
$date=$row['date'];
$news_type=$row['news_type'];
$price=$row['price'];
$descount=$row['descount'];
$product_code=$row['product_code'];
$news_type=$row['news_type'];
	?>
                <!-- start single product item -->
                  <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="proimage/<?php echo $image;?>" width="250" height="300"></a>
                        <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,50);?></a></h4>
                          <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="pages.php?pid=<?php echo htmlentities($row['id_live'])?>&&action=wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                       <!-------- <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a> -------------->
                        <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"> <span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#"><?php echo $news_type; ?></span>
                    </li>
                     <!--  end start single product item -->
			<?php }}?>
                                                        
              </ul>
              <!-- quick view modal -->                  
            
              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
                
				<?php $sql=mysqli_query($con,"select cat_id,category_name from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>

				<li><a href="product_display1.php?cid=<?php echo $row['cat_id'];?>"> <?php echo $row['category_name'];?></a></li>
<?php }?>
                
              </ul>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
			  		<?php $sql=mysqli_query($con,"select s_id,sab_title,cat_id from sab_categories limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>
              <div class="tag-cloud">
             <a href="product_display.php?s_id=<?php echo $row['s_id'];?>"> <?php echo $row['sab_title'];?></a>
                
              </div>
<?php }?>
            </div>
            <!-- single sidebar -->
           <!------- <div class="aa-sidebar-widget">
              <h3>Shop By Price</h3>              
              <!-- price range -->
              <!-----<div class="aa-sidebar-price-range">
               <form action="">
                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                  <span id="skip-value-lower" class="example-val">10.00</span>
                 <span id="skip-value-upper" class="example-val">1000.00</span>
                 <button class="aa-filter-btn" type="submit">Filter</button>
               </form>
              </div>              

            </div>  --------->
            <!-- single sidebar -->
          <!------  <div class="aa-sidebar-widget">
              <h3>Shop By Color</h3>
              <div class="aa-color-tag">
                <a class="aa-color-green" href="#"></a>
                <a class="aa-color-yellow" href="#"></a>
                <a class="aa-color-pink" href="#"></a>
                <a class="aa-color-purple" href="#"></a>
                <a class="aa-color-blue" href="#"></a>
                <a class="aa-color-orange" href="#"></a>
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-white" href="#"></a>
                <a class="aa-color-cyan" href="#"></a>
                <a class="aa-color-olive" href="#"></a>
                <a class="aa-color-orchid" href="#"></a>
              </div>                            
            </div>  ---------------->
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Recently Product</h3>
              <div class="aa-recently-views">
                <ul>
				  <?php
include('db_cons.php');
$select_query="select *from project_live order by RAND() LIMIT 5;";
$run_query=mysqli_query($con,$select_query);
while($row=(mysqli_fetch_array($run_query)))
{			
	 $id_live=$row['id_live'];
	 $employee_id=$row['employee_id'];
$Project_title=$row['Project_title'];	
$image=$row['image'];	
$Project_discription=$row['Project_discription'];
$status=$row['status'];
$short_des=$row['short_des'];
$keyworld=$row['keyworld'];
$authorname=$row['authorname'];
$category=$row['category'];
$sub_cat=$row['sub_cat'];
$date=$row['date'];
$news_type=$row['news_type'];
$price=$row['price'];
$descount=$row['descount'];
$product_code=$row['product_code'];
$news_type=$row['news_type'];

	?>	
                  <li>
                    <a href="pages.php?id=<?php echo $id_live;?>" class="aa-cartbox-img"><img alt="img" src="proimage/<?php echo $image;?>" width="150" height="150"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="pages.php?id=<?php echo $id_live;?>"><?php echo $Project_title;?></a></h4>
                       <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>&nbsp;Rs.<?php echo $descount; ?></del></span>
                    </div>                    
                  </li>
<?php }?>                                     
                </ul>
              </div>                            
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Top Rated Products</h3>
              <div class="aa-recently-views">
                <ul>
				
				  <?php
include('db_cons.php');
$select_query="select *from project_live ORDER BY id_live desc LIMIT 0,6;";
$run_query=mysqli_query($con,$select_query);
while($row=(mysqli_fetch_array($run_query)))
{			
	 $id_live=$row['id_live'];
	 $employee_id=$row['employee_id'];
$Project_title=$row['Project_title'];	
$image=$row['image'];	
$Project_discription=$row['Project_discription'];
$status=$row['status'];
$short_des=$row['short_des'];
$keyworld=$row['keyworld'];
$authorname=$row['authorname'];
$category=$row['category'];
$sub_cat=$row['sub_cat'];
$date=$row['date'];
$news_type=$row['news_type'];
$price=$row['price'];
$descount=$row['descount'];
$product_code=$row['product_code'];
$news_type=$row['news_type'];

	?>	
                  <li>
                    <a href="pages.php?id=<?php echo $id_live;?>" class="aa-cartbox-img"><img alt="img" src="proimage/<?php echo $image;?>" width="150" height="150"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="pages.php?id=<?php echo $id_live;?>"><?php echo $Project_title;?></a></h4>
                       <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>&nbsp;Rs.<?php echo $descount; ?></del></span>
                    </div>                    
                  </li>
				 
<?php }?>                     
                </ul>
              </div> 
<p> <hr></p>			  
            </div>
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->
 <!-- popular section -->
   <?php include('includes/popular_product.php');?>

  <!-- / popular section -->
  <!-- Support section -->
   <?php include('includes/support_sectioon.php');?>

  <!-- Subscribe section -->
   <?php include('news_sub.php');?>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <?php include('includes/footer.php');?>
  <!-- / footer -->
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


    

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