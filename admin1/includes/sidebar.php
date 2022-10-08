<div id="sidebar" class="sidebar   responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				
				
				
				
				
				
				<ul class="nav nav-list">
					<li class="active">
						<a href="index.php?id=<?php echo $id;?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
							Aks &amp; Elements
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="category.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Category
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="subcategory.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Sub Category
								</a>

								<b class="arrow"></b>
							</li>

							

							<li class="">
								<a href="post.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									add Product
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="post_view.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Product View
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="sliderupload.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Ad slider
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="view_sliderupload.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
								View slider
								</a>

								<b class="arrow"></b>
							</li>
							
							

							<li class="">
								<a href="upcoming.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									upcoming Product
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="view_upcoming.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
								View Up coming Product
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="advertisement.php?id=<?php echo $id;?>" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Advertise Banner
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="affileate.php">
											<i class="menu-icon fa fa-leaf green"></i>
											add Advertise
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="view_advertise.php" class="dropdown-toggle">
											<i class="menu-icon fa fa-pencil orange"></i>

											view Advertise
											<b class="arrow fa fa-angle-down"></b>
										</a>

										<b class="arrow"></b>

										<ul class="submenu">
											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-plus purple"></i>
													Add Product
												</a>

												<b class="arrow"></b>
											</li>

											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-eye pink"></i>
													View Products
												</a>

												<b class="arrow"></b>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
<!---------- start marketing tool-------------->



<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">
						Order Management
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="todays-orders.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Today's Orders
									  <?php
								 include('config.php');
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
	<b style="color: #4CAF50;"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
								</a>

								<b class="arrow"></b>
							</li>

							

							<li class="">
								<a href="pending-orders.php">
									<i class="menu-icon fa fa-caret-right"></i>
								Pending Orders
								<?php
							 include('config.php');
	$status='Delivered';									 
$ret = mysqli_query($con,"SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysqli_num_rows($ret);
{?><b style="color:red;"><?php echo htmlentities($num); ?></b>
<?php } ?>
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="delivered-orders.php">
									<i class="menu-icon fa fa-caret-right"></i>
								Delivered Orders
													<?php	
												 include('config.php');
	$status='Delivered';									 
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b style="color: #4CAF50;"><?php echo htmlentities($num1); ?></b>
<?php } ?>
								</a>

								<b class="arrow"></b>
							</li>



		<li class="">
								<a href="ordersrto.php">
									<i class="menu-icon fa fa-caret-right"></i>
						 Orders RTO
													<?php	
												
	$status='Order RTO';									 
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b style="color: #4CAF50;"><?php echo htmlentities($num1); ?></b>
<?php } ?>
								</a>

								<b class="arrow"></b>
							</li>

							
								<li class="">
								<a href="orderscancelled.php">
									<i class="menu-icon fa fa-caret-right"></i>
						 Order Cancelled
													<?php	
												
	$status='Order Cancelled';									 
$rt = mysqli_query($con,"SELECT * FROM Orders where orderStatus='$status'");
$num1 = mysqli_num_rows($rt);
{?><b style="color: #4CAF50;"><?php echo htmlentities($num1); ?></b>
<?php } ?>
								</a>

								<b class="arrow"></b>
							</li>

							
							
							
						<li class="">
								<a href="cancel_orderview.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
							Cancel_order view
								</a>
								</li>
						

							
						</ul>
					</li>




					
					<!---------- our start employee tool-------------->


<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">
								Employee
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="add_employee.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Add User
								</a>

								<b class="arrow"></b>
							</li>

							

							<li class="">
								<a href="all_user.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
								View User
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="active_user.php?id=<?php echo $id;?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Active User
								</a>

								<b class="arrow"></b>
							</li>

							

							
							
						

							
						</ul>
					</li>
					<!---------- end our employee tool--------------->
					

					<li class="">
						<a href="gallery.php?id=<?php echo $id;?>">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Gallery </span>
						</a>

						<b class="arrow"></b>
					</li>

				
					<li class="">
						<a href="#">
							<i class="menu-icon fa fa-comment"></i>
							<span class="menu-text"> Comment Login </span>
						</a>

						<b class="arrow"></b>
					</li>


					
				</ul><!-- /.nav-list -->

			
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
