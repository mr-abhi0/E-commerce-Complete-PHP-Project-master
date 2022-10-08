  	<?php 

 if(isset($_Get['action'])){
		if(!empty($_SESSION['cart'])){
		foreach($_POST['quantity'] as $key => $val){
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
		}
	}
?>
  <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <p><strong>Akashayam</strong> <span>Selling</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
		<?php
if(!empty($_SESSION['cart'])){
	?>
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify"><?php echo $_SESSION['qnty'];?></span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
				  
				   <?php
    $sql = "SELECT * FROM project_live WHERE id_live IN(";
			foreach($_SESSION['cart'] as $id_live => $value){
			$sql .=$id_live. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id_live ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id_live']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id_live']]['quantity']*$row['price'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

	?>
		
                    <li>
                      <a class="aa-cartbox-img" href="#"><img  src="proimage/<?php echo $row['image'];?>" width="150" height="150" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#"><?php echo $row['Project_title']; ?></a></h4>
						
                        Rs.<?php echo($row['price']);?>*<?php echo $_SESSION['cart'][$row['id_live']]['quantity']; ?>
                      </div>
                      <!---<a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a> --------->
                    </li>
                       				<?php } }?>               
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                     Rs.<?php echo $_SESSION['tp']="$totalprice". ".00"; ?>
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.php">Checkout</a>
                </div>
              </div>
			  
			  
			  <?php } else { ?>
			  <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">0</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                    
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Your Shopping Cart is Empty.</a></h4>
                   
                      </div>
                   
                    </li>
                                     
                
                  </ul>
         
                </div>
              </div>
			  	<?php }?>
		
			  
              <!-- / cart box -->
              <!-- search box -->
			  
			  <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 500px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid white;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid white;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: white;
    }
</style>
              <div class="aa-search-box">

          <form action="search-result.php" method="get"  name="search">
		    <div class="search-box">
		   <input type="text" name="value" required="" autocomplete="off" placeholder="Search Product title..." />
         <div class="result"></div>
		   </div>
		   
          
                  <button type="submit" class="search-button" name="search"><span class="fa fa-search"></span></button>
                </form> 
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>