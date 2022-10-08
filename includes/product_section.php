 <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#mobile" data-toggle="tab">Headsets & Headphones</a></li>
                    <li><a href="#speakers" data-toggle="tab">Speakers</a></li>
                    <li><a href="#mounts" data-toggle="tab">Mounts & stands</a></li>
                    <!---<li><a href="#electronics" data-toggle="tab">Electronics</a></li> --------->
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="mobile">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        
						<?php
include('db_cons.php');
$select_query="select *from project_live WHERE sub_cat LIKE ('41%') ORDER BY sub_cat desc LIMIT 0,8;";
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
                          <figure>
                            <a class="aa-product-img" href="pages.php?id=<?php echo $id_live;?>"><img src="proimage/<?php echo $image;?>" width="100%" height="300" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;" alt="<?php echo $Project_title;?>"></a>
                            <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,50);?></a></h4>
                              <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="pages.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <!---<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a> --------->
                              <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"><span class="fa fa-search"></span></a>                          
                         
						 </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#"><?php echo $news_type; ?></span>
                        </li>
                        <!-- start single product item -->
                   
<?php }?>
			                   
                      </ul>
                      <a class="aa-browse-btn" href="http://onlinepost.in/aks/product_display.php?s_id=41">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                       <div class="tab-pane fade" id="speakers">

                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        
						<?php
include('db_cons.php');
$select_query="select *from project_live WHERE sub_cat LIKE ('43%') ORDER BY sub_cat desc LIMIT 0,8;";
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
                          <figure>
                            <a class="aa-product-img" href="pages.php?id=<?php echo $id_live;?>"><img src="proimage/<?php echo $image;?>" width="100%" height="300" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;" alt="<?php echo $Project_title;?>"></a>
                            <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,50);?></a></h4>
                              <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"><span class="fa fa-search"></span></a>                          
                         
						 </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#"><?php echo $news_type; ?></span>
                        </li>
                        <!-- start single product item -->
                   
<?php }?>
			
                                            
                      </ul>
                      <a class="aa-browse-btn" href="http://onlinepost.in/aks/product_display.php?s_id=43">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>

                    <!-- / women product category -->
					
					
					
					
                    <!-- start sports product category -->
			
                   <div class="tab-pane fade" id="mounts">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        
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
						
						
					         <li>
                          <figure>
                            <a class="aa-product-img" href="pages.php?id=<?php echo $id_live;?>"><img src="proimage/<?php echo $image;?>" width="100%" height="300" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;" alt="<?php echo $Project_title;?>"></a>
                            <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,50);?></a></h4>
                              <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="pages.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                          <!--  <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a> ---->
                             <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"><span class="fa fa-search"></span></a>                          
                         
						  </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#"><?php echo $news_type; ?></span>
                        </li>
                        <!-- start single product item -->
                   
<?php }?>
			
                                            
                      </ul>
                      <a class="aa-browse-btn" href="http://onlinepost.in/aks/product_display.php?s_id=42">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / sports product category -->
                    <!-- start electronic product category -->
             
                    <!-- / electronic product category -->
                  </div>
                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
						    <?php
include('db_cons.php');
$select_query="select *from project_live";
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
            
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="proimage/<?php echo $image;?>">
                                             <img src="proimage/<?php echo $image;?>" width="100%" height="300" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;"class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="proimage/<?php echo $image;?>"width="30"
                                         data-big-image="proimage/<?php echo $image;?>" width="30">
                                          <img src="proimage/<?php echo $image;?>" width="30">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="proimage/<?php echo $image;?>"width="30"
                                         data-big-image="proimage/<?php echo $image;?>" width="30">
                                          <img src="proimage/<?php echo $image;?>" width="30">
                                      </a>  

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="proimage/<?php echo $image;?>" width="30"
                                         data-big-image="proimage/<?php echo $image;?>" width="30">
                                          <img src="proimage/<?php echo $image;?>" width="30">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
							                  <div class="aa-product-view-content">
                                <h3><?php echo substr($row['Project_title'],0,20);?></h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">Rs.<?php echo $price; ?></span>
                                  <p class="aa-product-avilability">Availbility: <span><?php echo $news_type; ?></span></p>
                                </div>
                                <p><?php echo substr($row['short_des'],0,500);?></p>
                              
                               
                             
                                <div class="aa-prod-view-bottom">
                                  <a href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="pages.php?id=<?php echo $id_live;?>" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>

                            </div>
							<?php }?>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>