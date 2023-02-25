<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#162946">
    <meta name="theme-color" content="#e72a1a">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="Duplex VehiclesOptimized" content="320">
    <meta name="description"
        content="Car Listing,Dealer,Rental Auto Classifieds Bootstrap Modern Responsive Clean HTML Template">
    <meta name="keywords"
        content="autotrader,autotrader dealer portal,car classifieds,autoportal,auto classifieds,car dealer template,Autolist,vehicle sale template,car dealer website,car sale template,automotive websites,auto websites,template for selling car,automotive template,car dealer website template,automotive classifieds,car for sale template,car dealer html template,automotive template,car dealer template,car dealer website template,car service template,html template,bootstrap templates,css templates,responsive template,premium html templates,template premium">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Title -->
    <title>UsedCarAdda Sale & Buy Our Dream Car Here </title>
    <!-- Bootstrap Css -->
    {{-- <link id="style" href="frontend/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" /> --}}
    <link id="style" href="frontend/assets/plugins/bootstrap/css/bootstrap-5-2.css" rel="stylesheet" />
    <script src="frontend/assets/js/otp.js"></script>

    {{-- -------bootstrap --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <!-- Dashboard Css -->
    <link href="frontend/assets/css/style.css" rel="stylesheet" />
    <link href="frontend/assets/css/plugins.css" rel="stylesheet" />
    <!-- Font-awesome  Css -->
    <link href="frontend/assets/css/icons.css" rel="stylesheet" />
    {{-- ---------scss file--------- --}}
    <link rel="stylesheet" href="frontend/assets/scss/style.scss">
    {{-- --------------custom.css(personal css)------------------- --}}
    <link rel="stylesheet" href="frontend/assets/css/custom.css">
</head>

<!--Topbar-->
<div class="header-main">
    <div class="top-bar">
        <div class="container">
            <div class="row D3">
                <div class="col-xl-4 col-lg-3 col-sm-4 col-4">
                    <div class="top-bar-left d-flex">
                        <div class="clearfix">
                            <ul class="socials">
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="javascript:void(0);"><i
                                            class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div id="header2" class="col-xl-4 col-lg-4 col-sm-4 d-lg-block d-none d-xl-block">
                    <div class="top-bar-center header-inputs mb-lg-0">
                        <div class="input-group">
                            <input type="text" class="form-control br-tl-0 br-bl-0"
                                placeholder="Search Cars & Brands">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary"><i class="fa fa-search text-white mr-1"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-8 col-8">
                    <div class="top-bar-right">
                        <ul class="custom">
                            {{-- <li>
										<a href="register.html" class="text-dark"><i class="fa fa-user me-1"></i> <span>Register</span></a>
									</li> --}}
                            <li>
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#locationModal" class="text-dark">
                                    <i class="fa fa-map-marker mr-1"></i> 
                                    <span>Location</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-dark"><i class="fa fa-home"></i> <span>My
                                        Listing</span></a>
                            </li>
                            <li class="dropdown">

                                @if (auth()->check())
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn-link" style="border: none;" type="submit" >
                                             <i class="fa fa-sign-in me-1"></i>
                                             <span>Logout</span>
                                        </button>
                                    </form>
                                @else
                                <a href="javascript:void(0);" class="text-dark" id="btnOpenForm" data-bs-toggle="modal"
                                    data-bs-target="#loginRegister">
                                    <i class="fa fa-sign-in me-1"></i>
                                    <span>Login/Register</span>
                                @endif

                                </a>
                                {{-- <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="padding: 86%;height: 57%;">
											<div class="" role="global">                            
												<div class="D4"><b>Hi, Guest!</b></div>  
												<br>
												<div class="D5">Login to get your dream vehicle</div>    <br>                   
												<a href="signin" class="btn btn-primary btn-block gtmEvent" data-label="header_profile_login">Login</a>
										<div class="row D6">
												<div class="col-6">
													<a href="signup"  data-label="header_profile_individual">Create an Individual Account <i class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Best suited for individuals who want to buy or sell online.">?</i>
													</a>
												</div>
												<div class="col-6">
													<a href="signup" data-label="header_profile_dealer">Create a
												<br>		Dealer <br> Account <i class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Best suited for dealers or companies who intend to sell online.">?</i>
													</a>
												</div>     
											</div>
											</div>
										</div> --}}
                                {{-- <button id="btnOpenForm">Open Form</button> --}}

                            </li>
                            {{-- <li class="dropdown">
										<a href="javascript:void(0);" class="text-dark" data-bs-toggle="dropdown"><i class="fa fa-home me-1"></i><span> My Dashboard</span></a>
										<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
											<a href="profile" class="dropdown-item" >
												<i class="dropdown-icon icon icon-user"></i> My Profile
											</a>
											<a class="dropdown-item" href="javascript:void(0);">
												<i class="dropdown-icon icon icon-speech"></i> Inbox
											</a>
											<a class="dropdown-item" href="javascript:void(0);">
												<i class="dropdown-icon icon icon-bell"></i> Notifications
											</a>
											<a href="mydash.html" class="dropdown-item" >
												<i class="dropdown-icon  icon icon-settings"></i> Account Settings
											</a>
											<a class="dropdown-item" href="javascript:void(0);">
												<i class="dropdown-icon icon icon-power"></i> Log out
											</a>
										</div>
									</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Horizontal Header -->
    <div class="horizontal-header clearfix ">
        <div class="container">
            <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
            <span class="smllogo">
                <img src="frontend/assets/images/brand/logo11.png" width="120" alt="" />
            </span>
            <span class="smllogo-dark">
                <img src="frontend/assets/images/brand/logo11.png" width="120" alt="" />
            </span>
            <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- /Horizontal Header -->
    <!-- Horizontal Main -->
    <div class="horizontal-main bg-dark-transparent clearfix D1 ">
        <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo">
                <a href="index.html"><img src="frontend/assets/images/brand/logo11.png" alt=""></a>
            </div>
            <div class="desktoplogo-1">
                <a href="index.html"><img src="frontend/assets/images/brand/logo11.png" alt=""></a>
            </div>
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true"><a href="index.php"class="D2">Home </a>
                    </li>
                    <li aria-haspopup="true"><a href="usedcar" class="D2">Used Car </a>
                    </li>
                    <li aria-haspopup="true"><a href="comparecar" class="D2">Compare
                            Car</a></li>
                    <li aria-haspopup="true"><a href="useddealear" class="D2">Used Car
                            Dealears</a>
                        <div class="horizontal-megamenu clearfix">
                            <div class="container">
                            </div>
                        </div>
                    </li>
                    <li aria-haspopup="true">
                        <a href="news">News
                            <!--<span class="fa fa-caret-down m-0"></span>-->
                        </a>
                        <ul class="">
                            <!-- <li aria-haspopup="true"><a href="javascript:void(0);">Blog Grid <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a> -->
                            <!-- <ul class="sub-menu">
           <li aria-haspopup="true"><a href="blog-grid.html">Blog Grid Left</a></li>
           <li aria-haspopup="true"><a href="blog-grid-right.html">Blog Grid Right</a></li>
           <li aria-haspopup="true"><a href="blog-grid-center.html">Blog Grid Center</a></li>
          </ul> -->
                            <!-- </li> -->
                            <!-- <li aria-haspopup="true"><a href="javascript:void(0);">Blog List <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a> -->
                            <!-- <ul class="sub-menu"> -->
                            <!-- <li aria-haspopup="true"><a href="blog-list.html">Blog List Left</a></li>
           <li aria-haspopup="true"><a href="blog-list-right.html">Blog List Right</a></li>
           <li aria-haspopup="true"><a href="blog-list-center.html">Blog List Center</a></li> -->
                            <!-- </ul> -->
                    </li>
                    <!-- <li aria-haspopup="true"><a href="javascript:void(0);">Blog Details <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a> -->
                    <!-- <ul class="sub-menu"> -->
                    <!-- <li aria-haspopup="true"><a href="blog-details.html">Blog Details Left</a></li>
           <li aria-haspopup="true"><a href="blog-details-right.html">Blog Details Right</a></li>
           <li aria-haspopup="true"><a href="blog-details-center.html">Blog Details Center</a></li> -->
                    <!-- </ul> -->
                    </li>
                    <!-- <li aria-haspopup="true"><a href="javascript:void(0);">Submenu-01<i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
           <ul class="sub-menu">
            <li aria-haspopup="true"><a href="javascript:void(0);">SubmenuLevel-01</a></li>
            <li aria-haspopup="true"><a href="javascript:void(0);">SubmenuLevel-02</a></li>
            <li aria-haspopup="true"><a href="javascript:void(0);">SubmenuLevel-03<i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
             <ul class="sub-menu">
              <li aria-haspopup="true"><a href="javascript:void(0);">SubmenuLevel-11</a></li>
              <li aria-haspopup="true"><a href="javascript:void(0);">SubmenuLevel-12</a></li>
              <li aria-haspopup="true"><a href="javascript:void(0);">SubmenuLevel-13</a></li>
             </ul>
            </li>
           </ul>
          </li> -->
                    <!-- <li aria-haspopup="true"><a href="switcher.html">Switcher</a></li> -->
                </ul>
                </li>
                <li aria-haspopup="true"><a href="contact"> Contact Us <span class="horizontalarrow"></span></a></li>
                <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0 btn-syc">
                    <span>
                        <a class="btn btn-orange" href="adspost">
                            <i class="fa fa-car text-white me-1"></i>
                            Sell Your Car
                        </a>
                    </span>
                </li>
                </ul>
                <ul class="mb-0">
                    <li aria-haspopup="true" class="mt-5 d-none d-lg-block btn-syc">
                        <span>
                            <a class="btn btn-green ad-post " href="adspost">
                                <i class="fa fa-car text-white me-1"></i>
                                Sell Your Car
                            </a>
                        </span>
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="loginRegister" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="signup-form">
                        <form action="">
                            <div class="form-group">
                                <label class="s2">First Name*</label>
                                <input class="form-control" type="text" placeholder="First Name" value=""
                                    required="" maxLength="20" />
                            </div>
                            <div class="form-group">
                                <label class="s2">Last Name*</label>
                                <input class="form-control" type="text" placeholder="First Name" value=""
                                    required="" maxLength="20" />
                            </div>
                            <div class="form-group">
                                <label class="s2">Email*</label>
                                <input class="form-control" type="text" placeholder="First Name" value=""
                                    required="" maxLength="20" />
                            </div>
                            <div class="form-group">
                                <label class="s2">Phone No.*</label>
                                <input class="form-control" type="tel" placeholder="First Name" value=""
                                    required="" maxLength="20" />
                            </div>
                            <button class="btn btn-primary btn-get-otp" type="submit">Get OTP</button>
                        </form>
                        <p class="text-dark mb-0 mt-3 abt-account">
                            Already have an account?
                            <a href="#!" class="text-primary ms-1 d-inline-block login-btn mb-5">Login</a>
                        </p>
                        <hr class="divider">
                        <div class="card-body social-images pb-0">
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
                    <div class="login-form">




                    <form method="POST" action="{{ route('otp.generate') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-end">{{ __('Mobile No') }}</label>
  
                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no" autofocus placeholder="+923xxxxxxxxxx">
  
                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Generate OTP') }}
                                </button>
  
                            </div>
                        </div>
                    </form>
                        <p class="text-dark mb-0 mt-3 abt-account">
                            Don't have account?
                            <a href="{{ URL::to('/register') }}" class="text-primary ms-1 d-inline-block">Sign UP</a>
                        </p>
                    </div>
                    <div class="otp-form">
                        <form action="">
                            <div class="form-group">
                                {{-- <img src="frontend/assets/images/car/3339154.jpg" class="w-100 h-300 mb-3 mx-auto text-center" alt="image"> --}}
                                <label class="s2">Enter OTP*</label>
                                <div class="otp-inputs">
                                    <input type="number" inputmode="numeric" pattern="\d" title="Numeric"
                                        onKeyPress="if(this.value.length===1) return false;" id="code1"
                                        name="tfaValue" class="text-center xxs:w-12 mx-1 form-control" maxlength="1"
                                        onPaste="pasteHandler(event, 'code', 1)"
                                        onKeydown="keydownHandler(event, 'code', 1)"
                                        onKeyup="autotab(event, 1, 'code2')" required />

                                    <input type="number" inputmode="numeric" pattern="\d" title="Numeric"
                                        onKeyPress="if(this.value.length===1) return false;" id="code2"
                                        name="tfaValue" class="text-center xxs:w-12 mx-1 form-control" maxlength="1"
                                        onPaste="pasteHandler(event, 'code', 2)"
                                        onKeydown="keydownHandler(event, 'code', 2)"
                                        onKeyup="autotab(event, 2, 'code3')" required />

                                    <input type="number" inputmode="numeric" pattern="\d" title="Numeric"
                                        onKeyPress="if(this.value.length===1) return false;" id="code3"
                                        name="tfaValue" class="text-center xxs:w-12 mx-1 form-control" maxlength="1"
                                        onPaste="pasteHandler(event, 'code', 3)"
                                        onKeydown="keydownHandler(event, 'code', 3)"
                                        onKeyup="autotab(event, 3, 'code4')" required />

                                    <input type="number" inputmode="numeric" pattern="\d" title="Numeric"
                                        onKeyPress="if(this.value.length===1) return false;" id="code4"
                                        name="tfaValue" class="text-center xxs:w-12 mx-1 form-control" maxlength="1"
                                        onPaste="pasteHandler(event, 'code', 4)"
                                        onKeydown="keydownHandler(event, 'code', 4)"
                                        onKeyup="autotab(event, 4, 'code5')" required />
                                </div>
                            </div>
                            <button class="btn btn-primary btn-get-otp" type="submit">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="locationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="container">
                        <div class="section-title center-block text-center">
                            <h2>Used cars In top Cities</h2>
                            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 cities">
                                <a href="cars-list.html" class="top-cities card text-center mb-xl-0 mb-lg-5 p-0 box-shadow2">
                                    <div class="card-body bg-primary br-ts-4 br-te-4">
                                        <img src="frontend/assets/images/city-landmark/svg/mumbai.png" alt="img" class="w-80 mb-0 p-0 br-0 border bg-white">
                                    </div>
                                    <div class="card-footer card-footer-location">
                                        <h4 class="font-weight-semibold mb-0">Mumbai</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 cities">
                                <a href="cars-list.html" class="top-cities card text-center mb-lg-0 p-0 box-shadow2">
                                    <div class="card-body bg-secondary br-ts-4 br-te-4">
                                        <img src="frontend/assets/images/city-landmark/svg/mumbai.png" alt="img" class="w-80 mb-0 p-0 br-0 border bg-white">
                                    </div>
                                    <div class="card-footer card-footer-location">
                                        <h4 class="font-weight-semibold mb-0">Delhi</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 cities">
                                <a href="cars-list.html" class="top-cities card text-center mb-lg-0 p-0 box-shadow2">
                                    <div class="card-body bg-success br-ts-4 br-te-4">
                                        <img src="frontend/assets/images/city-landmark/svg/mumbai.png" alt="img" class="w-80 mb-0 p-0 br-0 border bg-white">
                                    </div>
                                    <div class="card-footer card-footer-location">
                                        <h4 class="font-weight-semibold mb-0">Chennai</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 cities">
                                <a href="cars-list.html" class="top-cities card text-center mb-lg-0 p-0 box-shadow2">
                                    <div class="card-body bg-info br-ts-4 br-te-4">
                                        <img src="frontend/assets/images/city-landmark/svg/mumbai.png" alt="img" class="w-80 mb-0 p-0 br-0 border bg-white">
                                    </div>
                                    <div class="card-footer card-footer-location">
                                        <h4 class="font-weight-semibold mb-0">Delhi</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 cities">
                                <a href="cars-list.html" class="top-cities card text-center mb-sm-0 p-0 box-shadow2">
                                    <div class="card-body bg-warning br-ts-4 br-te-4">
                                        <img src="frontend/assets/images/city-landmark/svg/mumbai.png" alt="img" class="w-80 mb-0 p-0 br-0 border bg-white">
                                    </div>
                                    <div class="card-footer card-footer-location">
                                        <h4 class="font-weight-semibold mb-0">Goa</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 cities">
                                <a href="cars-list.html" class="top-cities card text-center mb-0 p-0 box-shadow2">
                                    <div class="card-body bg-purple br-ts-4 br-te-4">
                                        <img src="frontend/assets/images/city-landmark/svg/mumbai.png" alt="img" class="w-80 mb-0 p-0 br-0 border bg-white">
                                    </div>
                                    <div class="card-footer card-footer-location">
                                        <h4 class="font-weight-semibold mb-0">Heyderabad</h4>
                                    </div>
                                </a>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>