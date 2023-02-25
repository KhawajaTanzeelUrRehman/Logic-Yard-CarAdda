@include('frontend.layouts.header')


<!--Section-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">Login</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li> --}}
                        <li class="breadcrumb-item active text-white" aria-current="page">Login/Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section-->

<!--Login-Section-->
<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-md-12 register-right">
                        <ul class="nav nav-tabs nav-justified mb-5 p-2 border" id="myTab" role="tablist">
                            <li class="nav-item m-1">
                                <a class="nav-link active " id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link " id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="single-page  w-100  p-0">
                                    <div class="wrapper wrapper2">
                                        <form id="login" class="card-body" tabindex="500">
                                            <h3 class="pb-2">Login</h3>
                                            <div class="mail">
                                                <input type="email" name="mail">
                                                <label>Mail or Phone No.</label>
                                            </div>
                                            <div class="passwd">
                                                <input type="password" name="password">
                                                <label>Password</label>
                                            </div>
                                            <div class="submit">
                                                <a class="btn btn-primary btn-block" href="index.php">Login</a>
                                            </div>
                                            <p class="mb-2"><a href="forgotpassword" >Forgot Password</a></p>
                                            {{-- <p class="text-dark mb-0">Don't have account?<a href="register.html" class="text-primary ms-1 d-inline-block">Sign UP</a></p> --}}
                                        </form>
                                        <hr class="divider">
                                        <div class="card-body social-images">
                                            <p class="text-body text-left">Sign In to Social Accounts</p>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <a href="https://www.facebook.com/" class="btn btn-white me-2 border px-2 btn-lg btn-block text-left">
                                                        <img src="frontend/assets/images/svgs/svg/facebook.svg" class="h-5 w-5" alt=""><span class="ms-3 d-inline-block font-weight-bold"> Facebook</span>
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <a href="https://www.google.com/gmail/" class="btn btn-white me-2 px-2 border btn-lg btn-block text-left">
                                                        <img src="frontend/assets/images/svgs/svg/search.svg" class="h-5 w-5" alt=""><span class="ms-3 d-inline-block font-weight-bold"> Google</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="single-page w-100  p-0">
                                    <div class="wrapper wrapper2">
                                        <form id="Register" class="card-body" tabindex="500">
                                            <h3 class="pb-1">Register</h3>
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
                                                <a class="btn btn-primary btn-block" href="index.php">Register</a>
                                            </div>
                                            {{-- <p class="text-dark mb-0">Already have an account?<a href="login.html" class="text-primary ms-1 d-inline-block">Sign In</a></p> --}}
                                        </form>
                                        <hr class="divider">
                                        <div class="card-body social-images">
                                            <p class="text-body text-left">Sign In to Social Accounts</p>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <a href="https://www.facebook.com/" class="btn btn-white me-2 border px-2 btn-lg btn-block text-left">
                                                        <img src="frontend/assets/images/svgs/svg/facebook.svg" class="h-5 w-5" alt=""><span class="ms-3 d-inline-block font-weight-bold"> Facebook</span>
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <a href="https://www.google.com/gmail/" class="btn btn-white me-2 px-2 border btn-lg btn-block text-left">
                                                        <img src="frontend/assets/images/svgs/svg/search.svg" class="h-5 w-5" alt=""><span class="ms-3 d-inline-block font-weight-bold"> Google</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Login-Section-->

<!-- Recent Post-->
		<section class="sptb2 border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Posts</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border br-3 bg-white p-4 box-shadow2">
							<img class="w-8 h-8 me-4 br-3" src="frontend/assets/images/products/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="javascript:void(0);">Buy a CrusaderRecusandae</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border br-3 bg-white p-4 box-shadow2">
							<img class="w-8 h-8 me-4 br-3" src="frontend/assets/images/products/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="javascript:void(0);">Best New Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border br-3 bg-white p-4 box-shadow2">
							<img class="w-8 h-8 me-4 br-3" src="frontend/assets/images/products/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="javascript:void(0);">Fuel Effeciency Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Recent Post-->

@include('frontend.layouts.footer')