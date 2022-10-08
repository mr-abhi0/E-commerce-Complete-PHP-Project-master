  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
			  	  <?php
include('db_cons.php');
$select_query="select *from upcoming_product ORDER BY id desc LIMIT 0,1;";
$run_query=mysqli_query($con,$select_query);
while($row=(mysqli_fetch_array($run_query)))
{			
	 $id=$row['id'];
	 $employee_id=$row['employee_id'];
$title=$row['title'];	
$short_des=$row['short_des'];	
$image=$row['image'];	
$full_des=$row['full_des'];
$barnd_name=$row['barnd_name'];
$date=$row['date'];


	?>	
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="proimage/<?php echo $image;?>" width="250" height="300" alt="<?php echo $row['title'];?>">                    
                    <!--------  <div class="aa-prom-content">
                      <!---<span></span> 
                      <h4><a href="index.php"><?php echo $row['title'];?></a></h4>                      
                    </div> ---------------->
                  </div>
                </div>
              </div>
<?php }?>
              <!-- promo right -->
			
              <div class="col-md-7 no-padding">
			     
                <div class="aa-promo-right">
				 <?php
include('db_cons.php');
$select_query="select *from upcoming_product ORDER BY id desc LIMIT 1,4;";
$run_query=mysqli_query($con,$select_query);
while($row=(mysqli_fetch_array($run_query)))
{			
	 $id=$row['id'];
	 $employee_id=$row['employee_id'];
$title=$row['title'];	
$short_des=$row['short_des'];	
$image=$row['image'];	
$full_des=$row['full_des'];
$barnd_name=$row['barnd_name'];
$date=$row['date'];

?>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                       <img src="proimage/<?php echo $image;?>" width="250" height="200" alt="<?php echo $row['title'];?>" style="border:5px solid transparent;
  padding:5px;">                      
                    <!--------  <div class="aa-prom-content">
                      
                           <h4><a href="index.php"><?php echo $row['title'];?></a></h4>                        
                      </div>  --------->
                    </div>
                  </div>
                 
               
				  		<?php }?>
                </div>
		
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>