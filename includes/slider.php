  <section id="aa-slider" style="height:400px;" >
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
	  <?php
include('db_cons.php');
$select_query="select *from slider_new";
$run_query=mysqli_query($con,$select_query);
while($row=(mysqli_fetch_array($run_query)))
{			
	 	$sl_id=$row['sl_id'];
	 $employee_id=$row['employee_id'];
$slider_title=$row['slider_title'];	
$image=$row['image'];	
$slider_sub_title=$row['slider_sub_title'];
$url_button=$row['url_button'];


	?>	
          <li>
              <div class="seq-model">
                <img data-seq src="proimage/<?php echo $image;?>" alt="" style="width:100%; height:400px;" />
              </div>
            <div class="seq-title">
               <!----<span data-seq><?php echo $slider_title;?></span> ------>                
                           
               <!------- <p data-seq><?php echo $slider_sub_title;?></p> ------>
                <a data-seq href="<?php echo $url_button; ?>" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>   
            </li>
            <?php }?>
       
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>