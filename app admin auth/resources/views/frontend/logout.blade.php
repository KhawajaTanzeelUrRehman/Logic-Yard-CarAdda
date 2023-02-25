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

		<!-- Dashboard css -->
		<link href="frontend/assets/css/style.css" rel="stylesheet" />
		<link href="frontend/assets/css/plugins.css" rel="stylesheet" />
		<link href="frontend/assets/css/admin-custom.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="frontend/assets/css/icons.css" rel="stylesheet"/>

	</head>
	<body class="construction-image">

		<!--Loader-->
		<div id="global-loader">
			<img src="frontend/assets/images/loader.svg" class="loader-img " alt="">
		</div>
		<!--/Loader-->

		<!--Page-->
		<div class="page page-h">
			<div class="page-content z-index-10">
				<div class="container">
				     <div class="login-logo text-center py-3">

           <a href="#" style="display: inline-block;background: #fff;padding: 10px;border-radius: 5px;"><img src="frontend/assets/images/banners/logo.png"> </a>

        </div>

					<div class="row">
						<div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
							<div class="card box-shadow-0 mb-0">
								<div class="card-header">
									<h3 class="card-title">Login</h3>
								</div>
								<div class="card-body">
					   			     <form method="POST" action="{{ route('login') }}">
                       			 		@csrf				 

									<div class="form-group">
										<label for="email" class="form-label text-dark">{{ __('Email Address') }}</label>
										<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
											@error('email')
                                    			<span class="invalid-feedback" role="alert">
                                    			    <strong>{{ $message }}</strong>
                                    			</span>
                                			@enderror
									</div>
									<div class="form-group">
										<label for="password" class="form-label text-dark">{{ __('Password') }}</label>
										<input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
									</div>
									<!--<div class="form-group">-->
									<!--	<label class="custom-control custom-checkbox">-->
									<!--		<a href="forgot-password.html" class="float-end small text-dark mt-1">I forgot password</a>-->
									<!--		<input type="checkbox" class="custom-control-input">-->
									<!--		<span class="custom-control-label text-dark">Remember me</span>-->
									<!--	</label>-->
									<!--</div>-->
									<div class="form-footer mt-2">
										<button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
										                                @if (Route::has('password.request'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
									</div>
									<!--<div class="text-center  mt-3 text-dark">-->
									<!--	Don't have account yet? <a href="register.html">SignUp</a>-->
									<!--</div>-->
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Page-->

		<!-- JQuery js-->
		<script src="frontend/assets/js/vendors/jquery.min.js"></script>

		<!-- Bootstrap js -->
		<script src="frontend/assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="frontend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--JQueryVehiclerkline Js-->
		<script src="frontend/assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="frontend/assets/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating-2 Js-->
		<script src="frontend/assets/plugins/ratings-2/jquery.star-rating.js"></script>
		<script src="frontend/assets/plugins/ratings-2/star-rating.js"></script>


		<!-- P-scroll js-->
		<script src="frontend/assets/plugins/p-scrollbar/p-scrollbar.js"></script>

		<!-- Fullside-menu Js-->
		<script src="frontend/assets/plugins/toggle-sidebar/sidemenu.js"></script>

		<!--Counters -->
		<script src="frontend/assets/plugins/counters/counterup.min.js"></script>
		<script src="frontend/assets/plugins/counters/waypoints.min.js"></script>

		<!--ThemeColors JS -->
		<script src="frontend/assets/js/themeColors.js"></script>

		<!-- Custom Js-->
		<script src="frontend/assets/js/admin-custom.js"></script>

		<!-- SwitcherCustom Js-->
		<script src="frontend/assets/js/switcher-custom.js"></script>

	</body>
</html>