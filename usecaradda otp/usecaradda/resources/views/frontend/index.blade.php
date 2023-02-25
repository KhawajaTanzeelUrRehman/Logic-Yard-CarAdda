@include('frontend.layouts.header')

        
<body class="">
    
      
    <!--Loader-->
    <div id="global-loader">
        <img src="frontend/assets/images/loader.svg" class="loader-img " alt="">
    </div>



    {{-- **************login in otp******************** --}}

    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>
    <!-- JQuery js-->
    <!-- DEBUG-VIEW ENDED 9 APPPATH/Views/footer.php -->
    <!-- DEBUG-VIEW START 10 APPPATH/Views/model_view.php -->


    {{-- *********************************** --}}

    <!-- Popup Intro   signuu-in-->
    {{-- 	
	<div id="myModal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header border-bottom-0">
						<a class="close btn btn-sm btn-success" data-bs-dismiss="modal" aria-label="Close">
							Skip
						</a>
					</div>
					<div class="modal-body">
						<div id="popupcarousel" class="owl-carousel testimonial-owl-carousel4">
							<div class="item text-center">
								<div class="row">
									<div class="col-xl-8 col-md-12 d-block mx-auto">
										<div class="testimonia text-center">
											<img src="frontend/assets/images/products/intro/intro-about.svg" class="w-100 h-300 mb-3 mx-auto text-center" alt="image">
											<h2>Autolist</h2>
											
											<a href="signup" class="btn btn-success btn-ptill mb-3">Sign Up</a>
											<a href="signin" class="btn btn-primary btn-ptill mb-3">Sign In</a>
										</div>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div> --}}
    <!-- End Popup Intro-->



    <!--Section-->
    <div>
        <div class="cover-image sptb-1 bg-background-r" data-image-src="frontend/assets/images/banners/banner.jpg">
            <div class="header-text1 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="card mb-0 shadow-none">
                                <div class="card-body">
                                    <h2 class="mb-4">Find Your Right Car</h2>
                                    <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                                    <div class="row">
                                        <div class="form-group col-5">
                                            <label class="custom-control custom-radio mr-4 budget-label">
                                                <input type="radio" class="custom-control-input budget-control"
                                                    name="by-Budget-Model" value="budget" checked=""
                                                    onchange="filterByBudgetByModel(this)">
                                                <span class="custom-control-label">By Budget</span>
                                            </label>
                                        </div>
                                        <div class="form-group col-7">
                                            <label class="custom-control custom-radio model-label">
                                                <input type="radio" class="custom-control-input model-control"
                                                    name="by-Budget-Model" value="model"
                                                    onchange="filterByBudgetByModel(this)">
                                                <span class="custom-control-label">By Model</span>
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <div id="for-budget" class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group search-cars1">
                                                        <select
                                                            class="form-control select2-show-search border-bottom-0 w-100 br-3 by-budget"
                                                            name="budget-select" data-placeholder="Select">
                                                            <option value="null">Select Budget</option>
                                                            <option value="1">1-5 LAKH</option>
                                                            <option value="2">5-10 LAKH</option>
                                                            <option value="3">10-15 LAKH</option>
                                                            <option value="4">15-20 LAKH</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group search-cars1">
                                                        <select
                                                            class="form-control select2-show-search border-bottom-0 w-100 br-3 by-budget"
                                                            name="vechicle-select" data-placeholder="Select">
                                                            <option value="null">All Vechicle Type</option>
                                                            <option value="sedan">Sedan</option>
                                                            <option value="luxury">Luxury</option>
                                                            <option value="svg">SVG</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="for-model" class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group search-cars1">
                                                        <select
                                                            class="form-control select2-show-search border-bottom-0 w-100 br-3 by-model"
                                                            name="brand-select" data-placeholder="Select"
                                                            onchange="loadModelList(this)">
                                                            <option value="null">Select Brand</option>
                                                            <option value="maruti">Maruti</option>
                                                            <option value="honda">Honda</option>
                                                            <option value="hyundai">Hyundai</option>
                                                            <option value="volkswagen">Volkswagen</option>
                                                            <option value="ford">Ford</option>
                                                            <option value="renault">Renault</option>
                                                            <option value="skoda">Skoda</option>
                                                            <option value="tata">Tata</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group search-cars1">
                                                        <select
                                                            class="form-control select2-show-search border-bottom-0 w-100 br-3 by-model"
                                                            name="model-select" data-placeholder="Select Model">
                                                            <option value="null">Select Model</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <button type="button" id="btn-search" name="btn-search"
                                        class="btn btn-primary btn-lg btn-block"
                                        onclick="getSearch(this)">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-12" style="display: none;">
                            <div class="text-white mt-lg-8 mb-5">
                                <h1 class="mb-3 display-3">Used <span class="font-weight-bold"> Car Ka,</span><br> Naya
                                    Adda</h1>
                                <a href="#" class="btn btn-primary btn-lg mr-2">View More</a>
                                <a href="#" class="btn btn-success btn-lg">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </div>
    <!--Section-->
    


    <section class="sptb bg-white">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="section-title center-block text-center">
                        <h2> Most Searched Used Car</h2>sa
                        <p>Take a look to the most searched high quality used cars</p>
                    </div>
                    <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti-celerio"></a>
                                    <img src="frontend/assets/images/car/h11.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#" class="text-dark">
                                                    <h4 class="mb-0">Maruti Celerio</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 500000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>
                                                        &nbsp;&nbsp;8014</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>
                                                        &nbsp;&nbsp;Automatic</a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="renault-kwid"></a>
                                    <img src="frontend/assets/images/car/p1.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="renault-kwid" class="text-dark">
                                                    <h4 class="mb-0">Renault-KWID</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 411000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="renault-kwid" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;7014</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti-swift"></a>
                                    <img src="frontend/assets/images/car/maruti.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#maruti-swift" class="text-dark">
                                                    <h4 class="mb-0">Maruti-Swift</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 584000 </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#maruti-swift" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Diesel</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;83814</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#hyundai-i20"></a>
                                    <img src="frontend/assets/images/car/h.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#hyundai-i20" class="text-dark">
                                                    <h4 class="mb-0">Hyundai- i20</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 691000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#hyundai-i20" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;8012</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#tata-altroz"></a>
                                    <img src="frontend/assets/images/car/t.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#tata-altroz" class="text-dark">
                                                    <h4 class="mb-0">Tata-Altroz</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 589000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#tata-altroz" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;7610</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="renault-triber"></a>
                                    <img src="frontend/assets/images/car/r1.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="renault-triber" class="text-dark">
                                                    <h4 class="mb-0">Renault-Triber</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 554000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="renault-triber" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;7120</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti-wagon-r"></a>
                                    <img src="frontend/assets/images/car/w1.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#maruti-wagon-r" class="text-dark">
                                                    <h4 class="mb-0">Maruti-Wagon-R</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 493000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#maruti-wagon-r" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;79315</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti-baleno"></a>
                                    <img src="frontend/assets/images/car/mb.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#maruti-baleno" class="text-dark">
                                                    <h4 class="mb-0">Maruti-Baleno</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 599000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#maruti-baleno" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;68000</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti-alto"></a>
                                    <img src="frontend/assets/images/car/ma.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#maruti-alto" class="text-dark">
                                                    <h4 class="mb-0">Maruti-Alto</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 315000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#maruti-alto" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Cng</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;75000</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Manul</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti-eco"></a>
                                    <img src="frontend/assets/images/car/ee.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#maruti-eco" class="text-dark">
                                                    <h4 class="mb-0">Maruti-Eeco</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 437000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#maruti-eco" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;45000</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#alcazar "></a>
                                    <img src="frontend/assets/images/car/alc1.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#alcazar " class="text-dark">
                                                    <h4 class="mb-0">alcazar </h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 509000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#alcazar " class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;30000</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#aura"></a>
                                    <img src="frontend/assets/images/car/au.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#aura" class="text-dark">
                                                    <h4 class="mb-0">aura</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 101600
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#aura" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;3500</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#hundai_i20"></a>
                                    <img src="frontend/assets/images/car/h.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#hundai_i20" class="text-dark">
                                                    <h4 class="mb-0">Hundai I20</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 400000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#hundai_i20" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;1000Kms</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Manual</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#honda_city"></a>
                                    <img src="frontend/assets/images/car/honda-city.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#honda_city" class="text-dark">
                                                    <h4 class="mb-0">Honda city</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 1000000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#honda_city" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;12000KM</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#honda_amaze_2020"></a>
                                    <img src="frontend/assets/images/car/honda-amaze1.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#honda_amaze_2020" class="text-dark">
                                                    <h4 class="mb-0">Honda Amaze 2020</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 1000000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#honda_amaze_2020" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Disel</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;12000KM</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Electrical</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#swift"></a>
                                    <img src="frontend/assets/images/car/swift23.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#swift" class="text-dark">
                                                    <h4 class="mb-0">Swift</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 555000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#swift" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;1000Kms</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#honda_civic_2015"></a>
                                    <img src="frontend/assets/images/car/alc1.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#honda_civic_2015" class="text-dark">
                                                    <h4 class="mb-0">Honda Civic 2015</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 700000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#honda_civic_2015" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Disel</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;12000KM</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Manual</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#honda_accord"></a>
                                    <img src="frontend/assets/images/car/honda-accord.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#honda_accord" class="text-dark">
                                                    <h4 class="mb-0">Honda Accord</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 800000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#honda_accord" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;1000Kms</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti_vitara_brezza"></a>
                                    <img src="frontend/assets/images/car/mv3_1.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#maruti_vitara_brezza" class="text-dark">
                                                    <h4 class="mb-0">maruti vitara brezza</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 862500
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#maruti_vitara_brezza" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;18.76
                                                        Km/l</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Manual</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#maruti_vitara_brezzaa"></a>
                                    <img src="frontend/assets/images/car/mv3_3.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#maruti_vitara_brezzaa" class="text-dark">
                                                    <h4 class="mb-0">maruti vitara brezzaa</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 761500
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#maruti_vitara_brezzaa" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;18.76
                                                        Km/l</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Automatic</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#tata_safari"></a>
                                    <img src="frontend/assets/images/car/s_1.jpg" alt="img" class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#tata_safari" class="text-dark">
                                                    <h4 class="mb-0">Tata Safari</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 1599500
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#tata_safari" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Diesel</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;7000km</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Manual</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#santro"></a>
                                    <img src="frontend/assets/images/car/santro.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#santro" class="text-dark">
                                                    <h4 class="mb-0">Santro</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 100000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#santro" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;20000</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i>&nbsp;&nbsp;Select
                                                        Transmission Type</a>

                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card mb-0">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                        class="bg-warning"><i class="fa fa-bolt"></i></span></div>

                                <div class="item-card2-img">

                                    <a class="link" href="#ford aspire"></a>
                                    <img src="frontend/assets/images/car/fordaspire.jpg" alt="img"
                                        class="cover-image">

                                    <div class="item-tag-overlaytext">

                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="#ford aspire" class="text-dark">
                                                    <h4 class="mb-0">Ford Aspire</h4>
                                                </a>
                                            </div>
                                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                ₹ 9010000
                                            </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-card2-footer mt-4 mb-4">
                                        <div class="item-card9-footer d-sm-flex">
                                            <div class="ms-auto w-100">
                                                <a href="#ford aspire" class="text-dark">

                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-tachometer text-muted mr-1"></i>&nbsp;&nbsp;Petrol</a>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-road text-muted mr-1 "></i>&nbsp;&nbsp;800km/pl</a><br>
                                                    <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i
                                                            class="fa fa-car  mr-1 text-muted"></i></a>

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

    </section>

    <!--Section-->
    <section class="sptb">
        <div class="container ">

            <div class="card">
                <div class="card-body">
                    <div class="items-blog-tab-heading  center-block text-center">
                        <h2>Trusted used cars by Model</h2>
                        <p>Get high quality used car by your specific model choice</p>
                        <div class="col-md-12">
                            <div class="items-gallery">
                                <div class="items-blog-tab text-left">


                                    <div class="col-12">
                                        <ul class="nav nav-tabs items-blog-tab-menu">
                                            <li class=""><a href="#!" class="active show" data-bs-toggle="tab" data-bs-target="#tab-1">All</a></li>
                                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#tab-2" class="">Sedan</a></li>
                                            <li><a href="#!"  data-bs-toggle="tab" data-bs-target="#tab-3" class="">Luxury</a></li>
                                            <li><a href="#!"  data-bs-toggle="tab" data-bs-target="#tab-4" class="">SVG</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1">
                                        <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt">
                                                            </i></span></div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-celerio"></a>
                                                        <img src="frontend/assets/images/car/h11.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-celerio" class="text-dark">
                                                                        <h4 class="mb-0">Maruti Celerio</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i> ₹500000 </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-celerio">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="renault-kwid"></a>
                                                        <img src="frontend/assets/images/car/p1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="renault-kwid" class="text-dark">
                                                                        <h4 class="mb-0">Renault-KWID</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 411000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="renault-kwid">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="#maruti-swift"></a>
                                                        <img src="frontend/assets/images/car/maruti.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-swift" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Swift</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 584000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-swift">view
                                                        Details</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="hyundai-i20"></a>
                                                        <img src="frontend/assets/images/car/h.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="#hyundai-i20" class="text-dark">
                                                                        <h4 class="mb-0">Hyundai- i20</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 691000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="hyundai-i20">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="tata-altroz"></a>
                                                        <img src="frontend/assets/images/car/t.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="tata-altroz" class="text-dark">
                                                                        <h4 class="mb-0">Tata-Altroz</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 589000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="tata-altroz">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="renault-triber"></a>
                                                        <img src="frontend/assets/images/car/r1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="renault-triber" class="text-dark">
                                                                        <h4 class="mb-0">Renault-Triber</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 554000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="renault-triber">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-wagon-r"></a>
                                                        <img src="frontend/assets/images/car/w1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-wagon-r" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Wagon-R</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 493000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-wagon-r">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-baleno"></a>
                                                        <img src="frontend/assets/images/car/mb.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-baleno" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Baleno</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 599000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-baleno">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-alto"></a>
                                                        <img src="frontend/assets/images/car/ma.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-alto" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Alto</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 315000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-alto">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-eco"></a>
                                                        <img src="frontend/assets/images/car/ee.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-eco" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Eeco</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>

                                                                    ₹ 437000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-eco">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="#alcazar "></a>
                                                        <img src="frontend/assets/images/car/alc1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="alcazar " class="text-dark">
                                                                        <h4 class="mb-0">alcazar </h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 509000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="alcazar ">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="aura"></a>
                                                        <img src="frontend/assets/images/car/au.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="aura" class="text-dark">
                                                                        <h4 class="mb-0">aura</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 101600
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="aura">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="hundai_i20"></a>
                                                        <img src="frontend/assets/images/car/h.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="#hundai_i20" class="text-dark">
                                                                        <h4 class="mb-0">Hundai I20</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 400000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="hundai_i20">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_city"></a>
                                                        <img src="frontend/assets/images/car/honda-city.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="honda_city" class="text-dark">
                                                                        <h4 class="mb-0">Honda city</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 1000000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_city">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_amaze_2020"></a>
                                                        <img src="frontend/assets/images/car/honda-amaze1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="honda_amaze_2020" class="text-dark">
                                                                        <h4 class="mb-0">Honda Amaze 2020</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 1000000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_amaze_2020">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="swift"></a>
                                                        <img src="frontend/assets/images/car/swift23.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="swift" class="text-dark">
                                                                        <h4 class="mb-0">Swift</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 555000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="swift">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_civic_2015"></a>
                                                        <img src="frontend/assets/images/car/alc1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="#honda_civic_2015" class="text-dark">
                                                                        <h4 class="mb-0">Honda Civic 2015</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 700000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_civic_2015">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_accord"></a>
                                                        <img src="frontend/assets/images/car/honda-accord.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="honda_accord" class="text-dark">
                                                                        <h4 class="mb-0">Honda Accord</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 800000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_accord">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti_vitara_brezza"></a>
                                                        <img src="frontend/assets/images/car/mv3_1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti_vitara_brezza"
                                                                        class="text-dark">
                                                                        <h4 class="mb-0">maruti vitara brezza</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 862500
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg "
                                                        href="maruti_vitara_brezza">view Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti_vitara_brezzaa"></a>
                                                        <img src="frontend/assets/images/car/mv3_3.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="#maruti_vitara_brezzaa"
                                                                        class="text-dark">
                                                                        <h4 class="mb-0">maruti vitara brezzaa</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 761500
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg "
                                                        href="maruti_vitara_brezzaa">view Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="#tata_safari"></a>
                                                        <img src="frontend/assets/images/car/s_1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="#tata_safari" class="text-dark">
                                                                        <h4 class="mb-0">Tata Safari</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 1599500
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="tata_safari">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="santro"></a>
                                                        <img src="frontend/assets/images/car/santro.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="santro" class="text-dark">
                                                                        <h4 class="mb-0">Santro</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 100000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="santro">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="ford aspire"></a>
                                                        <img src="frontend/assets/images/car/fordaspire.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="ford aspire" class="text-dark">
                                                                        <h4 class="mb-0">Ford Aspire</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 9010000
                                                                </p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="#ford aspire">view
                                                        Details</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-celerio"></a>
                                                        <img src="frontend/assets/images/car/h11.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-celerio" class="text-dark">
                                                                        <h4 class="mb-0">Maruti Celerio</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 500000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-celerio">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="renault-kwid"></a>
                                                        <img src="frontend/assets/images/car/p1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="renault-kwid" class="text-dark">
                                                                        <h4 class="mb-0">Renault-KWID</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 411000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="renault-kwid">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-wagon-r"></a>
                                                        <img src="frontend/assets/images/car/w1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-wagon-r" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Wagon-R</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 493000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-wagon-r">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-alto"></a>
                                                        <img src="frontend/assets/images/car/ma.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-alto" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Alto</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 315000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-alto">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-eco"></a>
                                                        <img src="frontend/assets/images/car/ee.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-eco" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Eeco</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 437000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-eco">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="alcazar "></a>
                                                        <img src="frontend/assets/images/car/alc1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="alcazar " class="text-dark">
                                                                        <h4 class="mb-0">alcazar </h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 509000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="#alcazar ">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="aura"></a>
                                                        <img src="frontend/assets/images/car/au.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="aura" class="text-dark">
                                                                        <h4 class="mb-0">aura</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 101600
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="aura">view
                                                        Details</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="hundai_i20"></a>
                                                        <img src="frontend/assets/images/car/h.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="hundai_i20" class="text-dark">
                                                                        <h4 class="mb-0">Hundai I20</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 400000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="hundai_i20">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_civic_2015"></a>
                                                        <img src="frontend/assets/images/car/alc1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="honda_civic_2015" class="text-dark">
                                                                        <h4 class="mb-0">Honda Civic 2015</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 700000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_civic_2015">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_accord"></a>
                                                        <img src="frontend/assets/images/car/honda-accord.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="honda_accord" class="text-dark">
                                                                        <h4 class="mb-0">Honda Accord</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 800000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_accord">view
                                                        Details</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti_vitara_brezza"></a>
                                                        <img src="frontend/assets/images/car/mv3_1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti_vitara_brezza"
                                                                        class="text-dark">
                                                                        <h4 class="mb-0">maruti vitara brezza</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 862500
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg "
                                                        href="maruti_vitara_brezza">view Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti_vitara_brezzaa"></a>
                                                        <img src="frontend/assets/images/car/mv3_3.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti_vitara_brezzaa"
                                                                        class="text-dark">
                                                                        <h4 class="mb-0">maruti vitara brezzaa</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 761500
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg "
                                                        href="maruti_vitara_brezzaa">view Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="ford aspire"></a>
                                                        <img src="frontend/assets/images/car/fordaspire.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="ford aspire" class="text-dark">
                                                                        <h4 class="mb-0">Ford Aspire</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 9010000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="#ford aspire">view
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-swift"></a>
                                                        <img src="frontend/assets/images/car/maruti.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-swift" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Swift</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 584000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-swift">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="#hyundai-i20"></a>
                                                        <img src="frontend/assets/images/car/h.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="hyundai-i20" class="text-dark">
                                                                        <h4 class="mb-0">Hyundai- i20</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 691000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="hyundai-i20">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_amaze_2020"></a>
                                                        <img src="frontend/assets/images/car/honda-amaze1.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="honda_amaze_2020" class="text-dark">
                                                                        <h4 class="mb-0">Honda Amaze 2020</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 1000000

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_amaze_2020">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="swift"></a>
                                                        <img src="frontend/assets/images/car/swift23.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="swift" class="text-dark">
                                                                        <h4 class="mb-0">Swift</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 555000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="swift">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">

                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="tata_safari"></a>
                                                        <img src="frontend/assets/images/car/s_1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="tata_safari" class="text-dark">
                                                                        <h4 class="mb-0">Tata Safari</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 1599500
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="tata_safari">view
                                                        Details</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="tata-altroz"></a>
                                                        <img src="frontend/assets/images/car/t.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="tata-altroz" class="text-dark">
                                                                        <h4 class="mb-0">Tata-Altroz</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 589000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="tata-altroz">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="renault-triber"></a>
                                                        <img src="frontend/assets/images/car/r1.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="renault-triber" class="text-dark">
                                                                        <h4 class="mb-0">Renault-Triber</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 554000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="renault-triber">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="maruti-baleno"></a>
                                                        <img src="frontend/assets/images/car/mb.jpg" alt="img"
                                                            class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="maruti-baleno" class="text-dark">
                                                                        <h4 class="mb-0">Maruti-Baleno</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 599000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="maruti-baleno">view
                                                        Details</a>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span
                                                            class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                    </div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="honda_city"></a>
                                                        <img src="frontend/assets/images/car/honda-city.jpg"
                                                            alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="honda_city" class="text-dark">
                                                                        <h4 class="mb-0">Honda city</h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    ₹ 1000000
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="honda_city">view
                                                        Details</a>
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
    <!--Section-->
    <br>

    <!--Section-->

    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Trusted Used Car by budget</h2>
                <p> Look for cars in your specific budget</p>
            </div>
            <div class="col-md-12">
                <div class="items-gallery">
                    <div class="items-blog-tab text-center">
                        <div class="items-blog-tab-heading row">
                            <div class="col-12">
                                <ul class="nav items-blog-tab-menu">
                                    <li class=""><a href="#tab-1" class=""
                                            data-toggle="tab">All</a></li>
                                    <li><a href="#tab-2" data-toggle="tab" class="">1-5 LAKH</a></li>
                                    <li><a href="#tab-3" data-toggle="tab" class="">5-10 LAKH</a></li>
                                    <li><a href="#tab-4" data-toggle="tab" class="">10-15 LAKH</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row" id="cars-containers">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-3">
                                                <span><i class="car car-suzuki"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-6 br-tl-6">
                                                <img src="frontend/assets/images/media/h11.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">₹.5,00,000</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">maruti-celerio</h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger me-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ms-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ms-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-2">
                                                <span><i class="car car-volvo"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-6 br-tl-6">
                                                <img src="frontend/assets/images/media/a3.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">₹.5,00,000</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">renault-kwid </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger me-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ms-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ms-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card">
                                            <span class="ribbon-2">
                                                <span><i class="car car-volvo"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-6 br-tl-6">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">₹.5,00,000</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">maruti-swift </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger me-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ms-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ms-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="car car-suzuki"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="frontend/assets/images/media/maruthi1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">$987</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Alcazar </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="car car-suzuki"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">$785</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Aura </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-2">
                                                <span><i class="car car-suzuki"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">$432</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Creta </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-2">
                                                <span><i class="car car-volvo"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">$789</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Venue </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="car car-volvo"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">$675</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Amaze </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-3">
                                                <span><i class="car car-volvo"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">$235</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Wrv</h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="car car-honda"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">$890</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">City </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-2">
                                                <span><i class="car car-honda"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">$160</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Jazz</h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
                                            <span class="ribbon-1">
                                                <span><i class="car car-honda"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">$456</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-body pb-0">
                                                    <div class="item-card2">
                                                        <div class="item-card2-desc">
                                                            <div class="item-card2-text">
                                                                <a href="cars.html" class="text-dark">
                                                                    <h4 class="mb-0">Harrier</h4>
                                                                </a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="">
                                                                    <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                            class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                    </p>
                                                                </a>
                                                                <span
                                                                    class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                            </div>
                                                            <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                        </div>
                                                    </div>
                                                    <div class="item-card2-footer mt-4 mb-4">
                                                        <div class="item-card2-footer-u">
                                                            <div class="d-md-flex">
                                                                <span
                                                                    class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                                <div class="rating-stars d-inline-flex ml-auto">
                                                                    <input type="number" readonly="readonly"
                                                                        class="rating-value star"
                                                                        name="rating-stars-value" value="3">
                                                                    <div class="rating-stars-container">
                                                                        <div class="rating-star sm is--active">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm is--active">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm is--active">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="rating-star sm">
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div> (5 Reviews)
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
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="car car-porsche"></i></span>
                                            </span>
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">$987</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Nexon </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="car car-porsche"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">$785</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Tiago </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-2">
                                                <span><i class="car car-porsche"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="frontend/assets/images/media/a1.jpg" alt="img"
                                                    class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">$432</h6>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="mb-0">Bolero </h4>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="">
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i
                                                                        class="fa fa-map-marker text-danger mr-2"></i>Mumbai
                                                                </p>
                                                            </a>
                                                            <span
                                                                class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold">₹.5,00,000</span>
                                                        </div>
                                                        <!-- <p class="">Lorem Ipsum available, quis int nostrum exercitationem </p> -->
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex">
                                                            <span
                                                                class="review_score mr-2 badge badge-primary">4.0/5</span>
                                                            <div class="rating-stars d-inline-flex ml-auto">
                                                                <input type="number" readonly="readonly"
                                                                    class="rating-value star"
                                                                    name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm is--active">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="rating-star sm">
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div> (5 Reviews)
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
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- DEBUG-VIEW ENDED 6 APPPATH/Views/Trustedbybudget_view.php -->
    <!-- DEBUG-VIEW START 7 APPPATH/Views/brands_view.php -->

    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Popular Brands</h2>
                <p>View different used car options by your favourite brands</p>
            </div>
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/maruti"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/suzuki-web.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Maruti</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/honda"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/Hoo.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Honda</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/hyundai"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/hyu.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Hyundai</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/volkswagen"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/v.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Volkswagen</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/ford"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/ford-web.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Ford</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/renault"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/renaultweb.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Renault</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/skoda"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/skodaweb.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Skoda</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="https://www.usedcaradda.com/brand/tata"></a>
                                <div class="cat-img1">
                                    <img src="https://www.usedcaradda.com/assets/images/media/brands/tataweb.png"
                                        alt="img" class="mx-auto">
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-1">Tata</h5>
                                    <small class="badge badge-pill badge-primary mr-2">19</small><span
                                        class="text-muted">&nbsp;&nbsp;Ads are Posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- DEBUG-VIEW ENDED 7 APPPATH/Views/brands_view.php -->
    <!-- DEBUG-VIEW START 8 APPPATH/Views/lestedcar_view.php -->

    <section class="sptb">
        <div class="container ">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="items-gallery">
                            <div class="items-blog-tab text-left">
                                <div class="items-blog-tab-heading  center-block text-left">
                                    <h2>Latest Cars</h2><br>


                                </div>


                                <div id="myCarousel2" class="owl-carousel owl-carousel-icons2">
                                    <!-- Wrapper for carousel items -->


                                    <div class="card mb-0">
                                        <div class="item-card7-imgs">
                                            <a class="link" href="cars.html"></a>
                                            <img src="https://www.usedcaradda.com/assets/images/media/others/a1.jpg"
                                                alt="img" class="cover-image">

                                        </div>
                                        <div class="card-body">
                                            <div class="item-card7-desc">
                                                <div class="item-card7-text">
                                                    <a href="cars.html" class="text-dark">
                                                        <h4 class="">Porsche Taycan</h4>
                                                    </a>
                                                </div>

                                                <p class="mb-0">Rs 1.50 Cr*</p>
                                            </div>

                                        </div>
                                        <a class="btn btn-primary btn-lg " href="#">View Details</a>
                                    </div>

                                    <div class="item">
                                        <div class="card mb-0">

                                            <div class="item-card7-imgs">
                                                <a class="link" href="cars.html"></a>
                                                <img src="https://www.usedcaradda.com/assets/images/media/others/a2.jpg"
                                                    alt="img" class="cover-image">


                                            </div>
                                            <div class="card-body">
                                                <div class="item-card7-desc">
                                                    <div class="item-card7-text">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="">Porsche Macan</h4>
                                                        </a>
                                                    </div>

                                                    <p class="mb-0">Rs 83.21 Lakh</p>
                                                </div>

                                            </div>
                                            <a class="btn btn-primary btn-lg " href="#">View Details</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card mb-0">

                                            <div class="item-card7-imgs">
                                                <a class="link" href="cars.html"></a>
                                                <img src="https://www.usedcaradda.com/assets/images/media/others/a3.jpg"
                                                    alt="img" class="cover-image">
                                                <div class="item-card7-overlaytext">

                                                </div>

                                            </div>
                                            <div class="card-body">
                                                <div class="item-card7-desc">
                                                    <div class="item-card7-text">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="">Volvo XC90</h4>
                                                        </a>
                                                    </div>

                                                    <p class="mb-0">Rs 89.90 Lakh - 1.31 Cr*</p>
                                                </div>

                                            </div>
                                            <a class="btn btn-primary btn-lg " href="#">View Details</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card mb-0">

                                            <div class="item-card7-imgs">
                                                <a class="link" href="cars.html"></a>
                                                <img src="https://www.usedcaradda.com/assets/images/media/others/a4.jpg"
                                                    alt="img" class="cover-image">
                                                <div class="item-card7-overlaytext">

                                                </div>

                                            </div>
                                            <div class="card-body">
                                                <div class="item-card7-desc">
                                                    <div class="item-card7-text">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="">Maruti Celerio</h4>
                                                        </a>
                                                    </div>

                                                    <p class="mb-0">Rs 4.99 - 6.94 Lakh*</p>
                                                </div>

                                            </div>
                                            <a class="btn btn-primary btn-lg " href="#">View Details</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
    </section>

    <!-- Recent Post-->

    {{-- 
		<script>
			
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="X-CSRF-TOKEN"]').attr('content')
				}
			});
			
			var Body = $('body');
			
			

		</script> --}}



    @include('frontend.layouts.footer')
