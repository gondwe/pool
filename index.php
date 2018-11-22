
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
					
					<section class="widget widget-tabs-compact">
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="w-4-tab-1" role="tabpanel">
								<div class="user-card-row">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-photo tbl-cell-photo-64">
											<a href="#">
												<img src="img/avatar-1-128.png" alt="">
											</a>
										</div>
										<div class="tbl-cell">
											<p class="user-card-row-name font-16"><a href="#">Gerald Davidson</a></p>
											<p class="user-card-row-mail font-14"><a href="#">Company Founder</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="w-4-tab-2" role="tabpanel">
								<center>Content 2</center>
							</div>
							<div class="tab-pane" id="w-4-tab-3" role="tabpanel">
								<center>Content 3</center>
							</div>
						</div>
						<div class="widget-tabs-nav colored">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link red active"  href="routes.php" role="tab">		
										My Routes
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link orange"  href="history.php" role="tab">
									 Past Rides		
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link blue"  href="schedule.php" role="tab">
										Schedule Ride
									</a>
								</li>
							</ul>
						</div>
					</section><!--.widget-tabs-compact-->

					<section class="widget top-tabs">
						<header class="widget-header-dark">Ride Booking In Progress</header>
						<div class="widget-tabs-nav colored">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link green active"  role="tab">
										<i class="font-icon font-icon-pin"></i>
										<p style="font-size:12px;">Town to Freehold</p>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link blue" role="tab">
										<span class="font-icon ">4</span>
										Sits Remaining
									</a>
								</li>
								<li class="nav-item">
								<a class="nav-link orange" href='tel:0728884737'  role="tab">
										<i class="font-icon font-icon-phone"></i>
										<p style="font-size:12px;">Call driver</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active" id="wt-2-tab-1" role="tabpanel">
								<div class="circle-progress-bar-typical pieProgress"
									 role="progressbar" data-goal="79"
									 data-barcolor="#00a8ff"
									 data-barsize="10"
									 aria-valuemin="0"
									 aria-valuemax="100">
									<span class="pie_progress__number">0%</span>
								</div>
							</div>
							<div class="tab-pane" id="wt-2-tab-2" role="tabpanel">
								<center>Tasks</center>
							</div>
							<div class="tab-pane" id="wt-2-tab-3" role="tabpanel">
								<center>Event</center>
							</div>
							<h3 class="text-center" style="margin-top:10px;">Booked</h3>
						</div>
						
					</section>
	
				</div>

				<div class="clearfix hidden-xxl-up"></div>

		
				
			</div><!--.row-->

		</div><!--.container-fluid-->
	</div><!--.page-content-->
<?php include"footer.php" ?>