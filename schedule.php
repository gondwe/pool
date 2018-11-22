
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
                        <header class="widget-header-dark">Schedule Route</header>
                        
                        <div class="" style="margin-top:10px;">
                            <div class="">
                            <label for="exampleSelect" class="col-sm-2 form-control-label">Select Stage</label>  
                            <select id="exampleSelect" class="form-control">
								<option>Merica</option>
								<option>Gitwamba</option>
								<option>Tuskys</option>
								<option>Gilanis</option>
							</select>
                            </div>
                        </div>
                        <div class="" style="margin-top:10px;">
                            <div class="">
                            <label for="exampleSelect" class="col-sm-2 form-control-label">Select Route</label>  
                            <select id="exampleSelect" class="form-control">
								<option>Town to Kiamunyi</option>
								<option>Town to Freehold</option>
								<option>Town to Free area</option>
								<option>Town 58</option>
							</select>
                            </div>
                        </div>
                        
                        <div class="" style="margin-top:10px;">
                            <div class="">
                            <label for="exampleSelect" class="col-sm-2 form-control-label">Set Date </label>  
                           <input type="time" class="form-control" id="inputPassword" placeholder="Text">
                            </div>
                        </div>
                        
                        <div class="" style="margin-top:10px;">
                            <div class="">
                            <label for="exampleSelect" class="col-sm-2 form-control-label">Set Time </label>  
                           <input type="date" class="form-control" id="inputPassword" placeholder="Text">
                            </div>
                        </div>

                        <button style="margin-top:10px;" class="btn-block btn btn-success">Book</button>
						
					
						
					
				</div><!--.modal-->
					</section>
	
				</div>

				<div class="clearfix hidden-xxl-up"></div>

		
				
			</div><!--.row-->

		</div><!--.container-fluid-->
	</div><!--.page-content-->
<?php include"footer.php" ?>