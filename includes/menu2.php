  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
        
 <li><a href="#">Mobile Accessories<span class="caret"></span></a>
                <ul class="dropdown-menu">                
   
				 		<?php
include('db_cons.php');
$select_query="select *from sab_categories WHERE cat_id LIKE ('47%')ORDER BY cat_id desc LIMIT 0,8;;";
$run_query=mysqli_query($con,$select_query);
while($row=(mysqli_fetch_array($run_query)))
{			
	$s_id=$row['s_id'];
	$cat_id=$row['cat_id'];
	$sab_title=$row['sab_title'];

	?>

				  <li><a href="product_display.php?s_id=<?php echo $row['s_id'];?>"> <?php echo $row['sab_title'];?></a></li>
                 
<?php } ?>
                </ul>
              </li>
			
			
			
			        
 <li><a href="#">Home Decor & Devotional<span class="caret"></span></a>
                <ul class="dropdown-menu">                
   
				 		<?php
include('db_cons.php');
$select_query="select *from sab_categories WHERE cat_id LIKE ('49%')ORDER BY cat_id desc LIMIT 0,8;;";
$run_query=mysqli_query($con,$select_query);
while($row=(mysqli_fetch_array($run_query)))
{			
	$s_id=$row['s_id'];
	$cat_id=$row['cat_id'];
	$sab_title=$row['sab_title'];

	?>

				  <li><a href="product_display.php?s_id=<?php echo $row['s_id'];?>"> <?php echo $row['sab_title'];?></a></li>
                 
<?php } ?>
                </ul>
              </li>
		
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>