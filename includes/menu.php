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
				<?php
include('db_con1.php');

$mainmenu=mysqli_query($con,"select * from category");
while($sss=mysqli_fetch_array($mainmenu))
{
	$category_name=$sss['category_name'];
	$cat_id=$sss['cat_id'];
?>
             
              <li><a href="#"><?php echo $category_name; ?> <span class="caret"></span></a>
                  <?php
	
	$select2=mysqli_query($con,"select * from sab_categories where cat_id='$cat_id'");
	if(mysqli_num_rows($select2)=="")	{ 		
	}
	else
	{	?>
				<ul class="dropdown-menu">  
<?php
	  while($menu2=mysqli_fetch_array($select2))
	  {?>				
                  <li><a href="product_display.php?s_id=<?php echo $menu2['s_id'];?>"><?php echo $menu2['sab_title'];?></a></li>
	  <?php }?>
                 
                 
                </ul>
				  <?php  } ?>
              </li>
        
            <?php }?>
            </ul>
 
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>