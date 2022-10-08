   <!-- Related product -->
   	<hr>
            <div class="aa-product-related-item">
		
              <center><h3>Related Products</h3></center>
			  <br/>
              <ul class="aa-product-catg aa-related-item-slider">
                <!-- start single product item -->
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

			   <li>
                  <figure>
                    <a class="aa-product-img" href="pages.php?id=<?php echo $id_live;?>"><img src="proimage/<?php echo $image;?>"  width="100%" height="300" style="box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.0);;padding: 10px 10px 10px 10px; border-spacing: 15px;"alt=""></a>
                    <a class="aa-add-card-btn"href="index.php?page=product&action=add&id=<?php echo $row['id_live']; ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                      <h4 class="aa-product-title"><a href="pages.php?id=<?php echo $id_live;?>"><?php echo substr($row['Project_title'],0,20);?></a></h4>
                      <span class="aa-product-price">Rs.<?php echo $price; ?></span><span class="aa-product-price"><del>Rs.<?php echo $descount; ?></del></span>
                    </figcaption>
                  </figure>                     
                  <div class="aa-product-hvr-content">
                    <a href="pages.php?pid=<?php echo htmlentities($row['id_live'])?>&&action=wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                  
                     <a href="pages.php?id=<?php echo $id_live;?>" data-toggle2="tooltip" data-placement="top"><span class="fa fa-search"></span></a>                          
                  </div>
                  <!-- product badge -->
              <span class="aa-badge aa-sale" href="#"><?php echo $news_type; ?></span>
                </li>
				
			<?php }?>
                 <!-- start single product item -->
              
                <!-- start single product item -->
            
                <!-- start single product item -->
              
                <!-- start single product item -->
              
                <!-- start single product item -->
                    
                <!-- start single product item -->
             
                <!-- start single product item -->
                                                                                                 
              </ul>
              <!-- quick view modal -->                  
          <!-------- <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                   <!--------  <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                  </a>                                    
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div> 
                        <!-- Modal view content -->
                  <!---------  <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>T-Shirt</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$34.99</span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#">Polo T-Shirt</a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
               <!----- </div><!-- /.modal-dialog -->
            <!---- </div> ---------> 
              <!-- / quick view modal -->   
            </div>  
			