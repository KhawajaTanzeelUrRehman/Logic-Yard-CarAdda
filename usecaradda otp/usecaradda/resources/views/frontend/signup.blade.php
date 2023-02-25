
@include('frontend.layouts.header')
<!--Breadcrumb-->
<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="frontend/assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Register</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="index">Home</a></li>
								<!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li> -->
								<li class="breadcrumb-item active text-white" aria-current="page">Register</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--Section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
				    <div class="single-page" >
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">
								<form id="Register" class="card-body" tabindex="500">
									<h3>Register</h3>
									<div class="name">
										<input type="text" name="name">
										<label>Name</label>
									</div>
									<div class="mail">
										<input type="email" name="mail">
										<label>Mail or Phone No.</label>
									</div>
									<div class="passwd">
										<input type="password" name="password">
										<label>Password</label>
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="index">Register</a>
									</div>
									<p class="text-dark mb-0">Already have an account?<a href="signin" class="text-primary ms-1 d-inline-block">Sign In</a></p>
								</form>
								<hr class="divider">
								<div class="card-body social-images">
									<p class="text-body text-left">Sign In to Social Accounts</p>
									<div class="row">
										<div class="col-lg-6 col-sm-12">
											<a href="https://www.facebook.com/" class="btn btn-white me-2 border px-2 btn-lg btn-block mb-1 text-left">
												<img src="frontend/assets/images/svgs/svg/facebook.svg" class="h-5 w-5" alt=""><span class="ms-2 d-inline-block font-weight-bold"> Facebook</span>
											</a>
										</div>
										<div class="col-lg-6 col-sm-12">
											<a href="https://www.google.com/gmail/" class="btn btn-white me-2 px-2 border btn-lg btn-block mb-1 text-left">
												<img src="frontend/assets/images/svgs/svg/search.svg" class="h-5 w-5" alt=""><span class="ms-2 d-inline-block font-weight-bold"> Google</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->

        @include('frontend.layouts.footer')