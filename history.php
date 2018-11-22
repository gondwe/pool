
<?php include"head.php" ?>
<body class="with-side-menu">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-down" src="img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	           
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <ul class="side-menu-list">
	  
	    </ul>
	
	    
	</nav><!--.side-menu-->

	<div class="page-content">
		<header class="page-content-header widgets-header">
			
		</header><!--.page-content-header-->

		<div class="container-fluid">
			<div class="row">
				
				<div class="col-xxl-3 col-md-6">
				
					<section class="widget top-tabs">
                        <header class="widget-header-dark">Past Routes</header>
                        
                   
						
						<div class="tab-content widget-tabs-content" style="margin-top:20px;">
							<table class="table table-boarded">
                                <tr>
                                   <th>Route</th> 
                                   <th>Car</th> 
                                  
                                   <th>Price</th>
                                   <th></th> 
                                </tr>
                                <tr>
                                    <td>Town <i><strong>to</strong></i> Freehold</td>
                                    <td>Vitz</td>
                                   
                                    <td>Ksh400/=</td>
                                    <td><button class="btn btn-success btn-sm " data-toggle="modal"
						data-target="#myModal">View</button></td>
                                </tr>
                                <tr>
                                    <td>Town <i><strong>to</strong></i> Freehold</td>
                                    <td>Vitz</td>
                                   
                                    <td>Ksh400/=</td>
                                    <td><button class="btn btn-success btn-sm " data-toggle="modal"
						data-target="#myModal">View</button></td>
                                </tr>
                            </table>
						</div>
					

				<div class="modal fade"
					 id="myModal"
					 tabindex="-1"
					 role="dialog"
					 aria-labelledby="myModalLabel"
					 aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
									<i class="font-icon-close-2"></i>
								</button>
								<h4 class="modal-title" id="myModalLabel">KCB 778: Town to Kiamunyi</h4>
							</div>
							<div class="modal-body">
                                <table>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><img style="height:100px;" src="img/avatar.png"></td>
                                        <td><div style="margin-left:30px;"></div></td>
                                        <td>Name: Sam Njuguna <br> Car: Fielder <br> Plate: KCB 990 <br> Date : 4/12/2018 <br> Phone:0728-938-283 </td>
                                        
                                       
                                    </th>

                                </table>
                                <hr>
                                <table class="table">
                                    <tr>
                                        <th>Route</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        
                                    </tr>
                                    <tr>
                                        <td> Town to Kiamunyi</td>
                                        <td> Success </td>
                                        <td>Ksh200/=</td>
                                        
                                    </tr>
                                    
                                </table>
                                
                               
							</div>
							<div class="modal-footer">
                               
								<button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>		
							</div>
						</div>
					</div>
				</div><!--.modal-->
					</section>
	
				</div>

				<div class="clearfix hidden-xxl-up"></div>

		
				
			</div><!--.row-->

		</div><!--.container-fluid-->
	</div><!--.page-content-->
<?php include"footer.php" ?>