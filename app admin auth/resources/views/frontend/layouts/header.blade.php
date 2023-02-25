<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#162946">
		<meta name="theme-color" content="#e67605">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Usedcaradda Sale & Buy Our Dram Car here</title>

		<!-- Bootstrap Css -->
		<link  id="style"  href="frontend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="frontend/assets/css/style.css" rel="stylesheet" />
		<link href="frontend/assets/css/plugins.css" rel="stylesheet" />
		<link href="frontend/assets/css/admin-custom.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="frontend/assets/css/icons.css" rel="stylesheet"/>

		{{-- -----------custom------------ --}}
		<link rel="stylesheet" href="frontend/assets/css/custom.css">

	</head>
	<body class="app sidebar-mini">

		<!--Loader-->
		<div id="global-loader">
			<img src="frontend/assets/images/loader.svg" class="loader-img " alt="">
		</div>
		<!--/Loader-->

		<!--Page-->
		{{-- <div class="page"> --}}
			{{-- <div class="page-main"> --}}

				<!--Header-->
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="frontend/assets/images/banners/logo.png" class="header-brand-img" alt="Claylist logo">
								<img src="frontend/assets/images/banners/logo.png" class="header-brand-img1" alt="Claylist logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);"></a>
							<div class="header-navsearch">
								<a href="javascript:void(0);" class=" "></a>
								<form class="form-inline me-auto">
									<div class="nav-search">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
										<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
							<div class="d-flex ms-md-auto header-right">
								<button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
								</button>

								
											<div class="dropdown ">
												<a href="javascript:void(0);" class="nav-link pe-0 leading-none user-img" data-bs-toggle="dropdown">
													<img src="frontend/assets/images/banners/darshan.png" alt="profile-img" class="avatar avatar-md brround">
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
													<a class="dropdown-item" href="profilesetting">
														<i class="dropdown-icon icon icon-user"></i> My Profile
													</a>
													<!--<a class="dropdown-item" href="emailservices.html">-->
													<!--	<i class="dropdown-icon icon icon-speech"></i> Inbox-->
													<!--</a>-->
													<!--<a class="dropdown-item" href="editprofile.html">-->
													<!--	<i class="dropdown-icon  icon icon-settings"></i> Account Settings-->
													<!--</a>-->
	
													
											        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    				    @csrf
														<button class="dropdown-item" type="submit">
															<i class="dropdown-icon icon icon-power"></i> Log out
														</button>
                                    				</form>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						
					
			
				<!--/Header-->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="frontend/assets/images/banners/darshan.png" alt="user-img" class="avatar avatar-lg brround">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>Admin</h2>
								<span>Admin</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item slide-show" data-bs-toggle="slide" href="index.php"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span>
								{{-- <i class="angle fa fa-angle-right"></i> --}}
							</a>
						</li>
						<li class="slide">
							<a class="side-menu__item slide-show" data-bs-toggle="slide" href="car"><i class="side-menu__icon ti-car"></i><span class="side-menu__label">&nbsp;&nbsp;Car</span>
								{{-- <i class="angle fa fa-angle-right"></i> --}}
							</a>
							
						</li>
						<li class="slide">
							<a class="side-menu__item slide-show" data-bs-toggle="slide" href="car"><i class="side-menu__icon fa fa-list" style="color: #6d7e9c;"></i><span class="side-menu__label">&nbsp;&nbsp;Modules</span>
								<i class="angle fa fa-angle-right"></i>
							</a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="user">User Count</a></li>
								<li><a class="slide-item" href="listofvendors">Vendors Count</a></li>
								<li><a class="slide-item" href="carlist">Car Listing</a></li>
							
								
							</ul>
						</li>

					
						<li>
							<a class="side-menu__item slide-show" href="advertise"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Advertise</span></a>
						</li>
						
						<li class="slide">
							<a class="side-menu__item slide-show" data-bs-toggle="slide" href="car"><i class="side-menu__icon ti-package" style="color: #6d7e9c;"></i><span class="side-menu__label">&nbsp;&nbsp;Post Add</span>
								<i class="angle fa fa-angle-right"></i>
							</a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="postadd">Add Post</a></li>
								<li><a class="slide-item" href="postlist">List</a></li>
				
			
								
							</ul>
						</li>

						
						<li class="slide">
							<a class="side-menu__item slide-show" data-bs-toggle="slide" href="javascript:void(0);">
								<i class="side-menu__icon fa fa-database" style="color: #6d7e9c;"></i>
								<span class="side-menu__label">Master</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="carbodies" class="slide-item">Car Bodies</a>
								</li>
								<li>
									<a href="carbrand" class="slide-item">Car Brands</a>
								</li>
								<li>
									<a href="carfeature" class="slide-item">Car Features</a>
								</li>
								<li>
									<a href="carspecification" class="slide-item">Car Specification</a>
								</li>
								<li>
									<a href="carsubbrand" class="slide-item">Car Sub Brands</a>
								</li>
								<li>
									<a href="carsubbrandmodel" class="slide-item">Car Sub Brand Model </a>
								</li>
								<li>
									<a href="cartype" class="slide-item">Car Types</a>
								</li>
								<li>
									<a href="carcities" class="slide-item">Cities</a>
								</li>
								<li>
									<a href="carcountries" class="slide-item">Countries</a>
								</li>
								<li>
									<a href="carstate" class="slide-item">States</a>
								</li>
								<li>
									<a href="carfuels" class="slide-item">Fules</a>
								</li>
								<li>
									<a href="kilometer" class="slide-item">Kilometers</a>
								</li>
								<li>
									<a href="carowner" class="slide-item">Owners</a>
								</li>
								<li>
									<a href="carprices" class="slide-item">Prices</a>
								</li>
								<li>
									<a href="transmission" class="slide-item">Transmission</a>
								</li>
								<li>
									<a href="year" class="slide-item">Year</a>
								</li>
								
							</ul>
						</li>
						
						<li class="slide">
							<a class="side-menu__item slide-show" data-bs-toggle="slide" href="profilesetting"><i class="side-menu__icon ti-shopping-cart"></i><span class="side-menu__label">Profile Settings</span>
								{{-- <i class="angle fa fa-angle-right"></i> --}}
							</a>
							
						</li>
						
					</ul>
				</aside>
				<!-- /Sidebar menu-->
			</div>
							
