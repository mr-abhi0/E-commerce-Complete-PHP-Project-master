<section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#latest" data-toggle="tab">Latest</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
				  <?php
include('db_cons.php');
$select_query="select *from project_live ORDER BY id_live desc LIMIT 0,20;";
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

                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="pages.php?id=<?php echo $id_live;?>"><img src="proimage/<?php echo $image;?>" width="100%" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;" height="300"></a>
                        <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>""><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,50);?></a></h4>
                          <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="pages.php?pid=<?php echo htmlentities($row['id_live'])?>&&action=wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        
                
                        
                        
                        <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"> <span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#"><?php echo $news_type; ?></span>
                    </li>
                     <!--  end start single product item -->
             
                 
              
               
              
<?php }?>					
                  </ul>
                  <a class="aa-browse-btn" href="product_display.php?s_id=41">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->
                
				
				
				
                <!-- start featured product category -->
                <div class="tab-pane fade" id="featured">
                 <ul class="aa-product-catg aa-featured-slider">
				 
				 		<?php
include('db_cons.php');
$select_query="select *from project_live WHERE sub_cat LIKE ('42%') ORDER BY sub_cat desc LIMIT 0,8;";
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
			
                    <!-- start single product item -->
                      <li>
                      <figure>
                        <a class="aa-product-img" href="pages.php?id=<?php echo $id_live;?>"><img src="proimage/<?php echo $image;?>" width="100%" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;" height="300"></a>
                        <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,20);?></a></h4>
                          <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="pages.php?pid=<?php echo htmlentities($row['id_live'])?>&&action=wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span>
                        <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"> <span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="pages.php?id=<?php echo $id_live;?>"><?php echo $news_type; ?></span>
                    </li>
<?php }?>                                            
                  </ul>
                  <a class="aa-browse-btn" href="product_display.php?s_id=42">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->





                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
				  <?php
include('db_cons.php');
$select_query="select *from project_live WHERE sub_cat LIKE ('44%') ORDER BY sub_cat desc LIMIT 0,8;";
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
			
                    <!-- start single product item -->
                     <li>
                      <figure>
                        <a class="aa-product-img" href="pages.php?id=<?php echo $id_live;?>"><img src="proimage/<?php echo $image;?>" width="100%" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;" height="300"></a>
                        <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,20);?></a></h4>
                          <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="pages.php?pid=<?php echo htmlentities($row['id_live'])?>&&action=wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                      
                        <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"> <span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#"><?php echo $news_type; ?></span>
                    </li>
                     <!-- start single product item -->
<?php }?>
                                                                                                      
                  </ul>
                   <a class="aa-browse-btn" href="product_display.php?s_id=44">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>