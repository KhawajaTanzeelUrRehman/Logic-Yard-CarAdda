@include('frontend.layouts.header')
<!--Section-->
<div>
    <div class="cover-image sptb-1 bg-background" data-image-src="frontend/assets/images/banners/banner1.jpg">
        <div class="header-text1 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class=""><span class="font-weight-bold">16,25,365&nbsp;</span>Offered Cars Available
                            </h1>
                        </div>
                        <div class="search-background bg-transparent mt-5">
                            <div class="form row no-gutters ">
                                <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-transparent br-3 br-md-0">
                                    <input type="text"
                                        class="form-control input-lg br-be-md-0 br-te-md-0 border-end-0" id="text4"
                                        placeholder="Search Product">
                                </div>
                                <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-transparent br-3 br-md-0">
                                    <input type="text" class="form-control input-lg br-md-0" id="text5"
                                        placeholder="Enter Location">
                                    <span><i class="fa fa-map-marker location-gps me-1"></i> </span>
                                </div>
                                <div
                                    class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-transparent br-3 br-md-0">
                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                        data-placeholder="Select">
                                        <optgroup label="Categories">
                                            <option>Choose Make</option>
                                            <option value="1">Lamborghini</option>
                                            <option value="2">Tarragon</option>
                                            <option value="3">Specter</option>
                                            <option value="4">Chinnka Digli</option>
                                            <option value="5">Exercitationem</option>
                                            <option value="6">Subaru</option>
                                            <option value="7">Eiusmod</option>
                                            <option value="8">Quaerat</option>
                                            <option value="9">Interstate</option>
                                            <option value="10">Alfa Romeo</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <a href="javascript:void(0);"
                                        class="btn btn-lg btn-block btn-primary br-bs-md-0 br-ts-md-0 right-0">Search
                                        Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>
</div>
<!--Section-->
<!--Breadcrumb-->
<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Used Car</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Used Car</li>
            </ol>
        </div>
    </div>
</div>
<!--/Breadcrumb-->
<!--listing-->
<section class="sptb">
    <div class="container">
        <div class="row">
            <!--Left Side Content-->
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control br-ts-3 br-bs-3" placeholder="Search">
                            <div class="">
                                <button type="button" class="btn btn-primary br-ts-0  br-bs-0">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden">
                    <div class="px-4 py-3 border-bottom">
                        <h4 class="mb-0">Brand Name</h4>
                    </div>
                    <div class="card-body">
                        <div class="" id="container">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1"
                                        value="option1">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Maruti<span
                                                class="label label-secondary float-end">14</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2"
                                        value="option2">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Honda<span
                                                class="label label-secondary float-end">22</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox3"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Hyundai<span
                                                class="label label-secondary float-end">78</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox4"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Volkswagen<span
                                                class="label label-secondary float-end">35</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox5"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Ford<span
                                                class="label label-secondary float-end">23</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox6"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Renault<span
                                                class="label label-secondary float-end">14</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Skoda<span
                                                class="label label-secondary float-end">45</span></a>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <a href="javascript:void(0);" class="text-dark">Tata<span
                                                class="label label-secondary float-end">34</span></a>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-bottom border-top">
                        <h4 class="mb-0">Price Range</h4>
                    </div>
                    <div class="card-body">
                        <div class="h6">
                            <select class="form-control select2 price-filter">
                                <option value="">Select Price</option>
                                <option value="10000 - 500000">1-5 LAKH</option>
                                <option value="500001 - 1000000">5-10 LAKH</option>
                                <option value="1000001 - 1500000">10-15 LAKH</option>
                                <option value="1500001 - 2000000">15-20 LAKH</option>
                            </select>
                            
                            {{-- <input type="text" id="price"> --}}
                        </div>
                        {{-- <div id="mySlider"></div> --}}
                    </div>
                    <div class="px-4 py-3 border-bottom">
                        <h4 class="mb-0">Condition</h4>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox2"
                                    value="option2">
                                <span class="custom-control-label">
                                    All
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox1"
                                    value="option1">
                                <span class="custom-control-label">
                                    New
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox2"
                                    value="option2">
                                <span class="custom-control-label">
                                    Used
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox3"
                                    value="option2">
                                <span class="custom-control-label">
                                    Certified Pre-Owned
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-bottom border-top">
                        <h4 class="mb-0">Year</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="inputState1" class="col-form-label">Min</label>
                                <select id="inputState1" class="form-control select2">
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2019</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="inputState2" class="col-form-label">Max</label>
                                <select id="inputState2" class="form-control select2">
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2019</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                    <option>2012</option>
                                    <option>2011</option>
                                    <option>2010</option>
                                    <option>2009</option>
                                    <option>2008</option>
                                    <option>2007</option>
                                    <option>2006</option>
                                    <option>2005</option>
                                    <option>2004</option>
                                    <option>2003</option>
                                    <option>2002</option>
                                    <option>2001</option>
                                    <option>2000</option>
                                    <option>1999</option>
                                    <option>1998</option>
                                    <option>1997</option>
                                    <option>1996</option>
                                    <option>1995</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-bottom border-top">
                        <h4 class="mb-0">Posted By</h4>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox1"
                                    value="option1">
                                <span class="custom-control-label">
                                    Dealer
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox2"
                                    value="option2">
                                <span class="custom-control-label">
                                    Individual
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="checkbox2"
                                    value="option2">
                                <span class="custom-control-label">
                                    Reseller
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-bottom border-top">
                        <h4 class="mb-0">Vehicle Type</h4>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option1">
                                <span class="custom-control-label">
                                    Sedan
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    Luxury
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    SVG
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    SUV
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-bottom border-top">
                        <h4 class="mb-0">Fuel Type</h4>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option1">
                                <span class="custom-control-label">
                                    Electric
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    Diesel
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    Petrol
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    Hybrid
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    Petrol+CNG
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox11"
                                    value="option2">
                                <span class="custom-control-label">
                                    Petrol+LPG
                                </span>
                            </label>
                        </div>
                    </div>
                    {{-- <div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Body Type</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option1">
										<span class="custom-control-label">
											Convertable
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Coupe
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Crossover
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Hatchback
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Muv
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Quadricycle
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Ringer Ace
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											SUV
										</span>
									</label>
								</div>
							</div> --}}
                    <div class="px-4 py-3 border-bottom border-top">
                        <h4 class="mb-0">Transmission</h4>
                    </div>
                    <div class="card-body">
                        <div class="filter-product-checkboxs">
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox13"
                                    value="option1">
                                <span class="custom-control-label">
                                    AMT
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox13"
                                    value="option2">
                                <span class="custom-control-label">
                                    Automatic
                                </span>
                            </label>
                            <label class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="checkbox13"
                                    value="option2">
                                <span class="custom-control-label">
                                    Manual
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="javascript:void(0);" class="btn btn-secondary btn-block">Apply Filter</a>
                    </div>
                </div>
                <div class="card mb-lg-0">
                    <div class="card-header">
                        <h3 class="card-title">Shares</h3>
                    </div>
                    <div class="card-body product-filter-desc">
                        <div class="product-filter-icons text-center">
                            <a href="javascript:void(0);" class="facebook-bg"><i class="fa fa-facebook"
                                    style="color: #ffffff;"></i></a>
                            <a href="javascript:void(0);" class="twitter-bg"><i class="fa fa-twitter"
                                    style="color: #ffffff;"></i></a>
                            <a href="javascript:void(0);" class="google-bg"><i class="fa fa-google"
                                    style="color: #ffffff;"></i></a>
                            <a href="javascript:void(0);" class="dribbble-bg"><i class="fa fa-dribbble"
                                    style="color: #ffffff;"></i></a>
                            <a href="javascript:void(0);" class="pinterest-bg"><i class="fa fa-pinterest"
                                    style="color: #ffffff;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Left Side Content-->
            <div class="col-xl-9 col-lg-9 col-md-12">
                <!--Lists-->
                <div class=" mb-0">
                    <div class="">
                        <div class="item2-gl ">
                            <div class=" mb-0">
                                <div class="">
                                    <div class="bg-white p-5 item2-gl-nav d-lg-flex">
                                        <h6 class="mb-0 mt-3 text-left">Showing 1 to 10 of 30 entries</h6>
										
                                        <ul class="nav nav-tabs item2-gl-menu ms-auto mt-1">
                                            <li class="">
												<a href="#!" class="active show" data-bs-toggle="tab" data-bs-target="#tab-11" title="List style">
													<i class="fa fa-list"></i>
												</a>
											</li>
                                            <li>
												<a href="#!" data-bs-toggle="tab" data-bs-target="#tab-12" class="" title="Grid">
													<i class="fa fa-th"></i>
												</a>
											</li>
                                        </ul>
                                        <div class="d-sm-flex item2-gl-group">
                                            <label class="me-2 mt-2 mb-sm-1">Sort By:</label>
                                            <div class="selectgroup">
                                                <label class="selectgroup-item mb-md-0">
                                                    <input type="radio" name="value" value="Price"
                                                        class="selectgroup-input" checked="">
                                                    <span class="selectgroup-button">Price <i
                                                            class="fa fa-sort ms-1"></i></span>
                                                </label>
                                                <label class="selectgroup-item mb-md-0">
                                                    <input type="radio" name="value" value="Popularity"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button flex-wrap">Popularity</span>
                                                </label>
                                                <label class="selectgroup-item mb-md-0">
                                                    <input type="radio" name="value" value="Latest"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Latest</span>
                                                </label>
                                                <label class="selectgroup-item mb-0">
                                                    <input type="radio" name="value" value="Rating"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Rating</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-11">
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="arrow-ribbon bg-primary">Sale</div>
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/h4.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist">
                                                        <i class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1"> Dignissimos</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 2
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class="mb-0 leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$748.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car  me-1 text-muted"></i>
                                                                Automatic</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1 "></i>4000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>Electric</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/j2.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span>
                                                        <a href="cars.html" class="bg-success">New</a>
                                                        <a href="cars.html" class="bg-danger">Rent</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Exercitationem</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$862.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i> Manual</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 5000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Disel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/j3.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span><a href="cars.html" class="bg-success">New</a></span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Cheyenne</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$635.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i> Manual</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 5000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Petrol</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/h3.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span>
                                                        <a href="cars.html" class="bg-success">New</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Meridian</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$526.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i>
                                                                Automatic</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 4000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Hybrid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/v1.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span>
                                                        <a href="cars.html" class="bg-success">New</a>
                                                        <a href="cars.html" class="bg-danger">Rent</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Specter</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$256.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i> Manual</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 5000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Petrol + CNG</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/h1.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Roamer</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$987.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i> Manual</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 5000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Petrol + LPG</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/v2.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Dynamo</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$746.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i> Manual</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 5000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Disel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="arrow-ribbon bg-primary">Sale</div>
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/h4.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);" class="item-card9-icons1 wishlist">
                                                        <i class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Nebula</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 2
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class="mb-0 leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$869.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car  me-1 text-muted"></i>
                                                                Automatic</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1 "></i>4000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>Petrol</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden sold-out">
                                        <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">sold
                                                out</span></div>
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a class="link" href="cars.html"></a>
                                                    <img src="frontend/assets/images/products/j2.png" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars">
                                                        <div class="rating-star sm block my-rating-5" data-stars="4s">
                                                        </div>
                                                    </div>
                                                    <span><a href="cars.html" class="bg-success">New</a></span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Essence Meridian</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$987.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i> Manual</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 5000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Disel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div id="carouselExampleSlidesOnly"
                                                    class="carousel car-slide item-card9-imgs"
                                                    data-bs-ride="carousel">
                                                    <a class="link" href="cars.html"></a>
                                                    <div class="carousel-inner br-0">
                                                        <div class="carousel-item active">
                                                            <img src="frontend/assets/images/products/j3.png"
                                                                alt="img" class="cover-image">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="frontend/assets/images/products/j1.png"
                                                                alt="img" class="cover-image">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="frontend/assets/images/products/j2.png"
                                                                alt="img" class="cover-image">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleSlidesOnly"
                                                        role="button" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleSlidesOnly"
                                                        role="button" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <div class="item-card9-icons">
                                                    <a href="javascript:void(0);"
                                                        class="item-card9-icons1 wishlist active"> <i
                                                            class="fa fa fa-heart-o"></i></a>
                                                </div>
                                                <div class="item-overly-trans">
                                                    <span><a href="cars.html" class="bg-success">New</a></span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <a href="cars.html" class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1">Tarragon</h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-map-marker text-muted me-1"></i>
                                                                    USA</span></a>
                                                            <a href="javascript:void(0);"
                                                                class="me-4 d-inline-block"><span class=""><i
                                                                        class="fa fa-calendar-o text-muted me-1"></i> 5
                                                                    days ago</span></a>
                                                        </div>
                                                        <p class=" leading-tight">Lorem Ipsum available, but the
                                                            majority have suffered alteration in some form</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$745.00
                                                            </h4>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Car type"><i
                                                                    class="fa fa-car text-muted me-1"></i> Manual</a>
                                                            <a href="javascript:void(0);" class="me-2 d-inline-block"
                                                                title="Kilometrs"><i
                                                                    class="fa fa-road text-muted me-1"></i> 5000Kms</a>
                                                            <a href="javascript:void(0);" class="d-inline-block"
                                                                title="FuealType"><i
                                                                    class="fa fa-tachometer text-muted me-1"></i>
                                                                Hybrid</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$748.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/h4.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1"> Dignissimos</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        2 days ago</span></a>
                                                            </div>
                                                            <p class="mb-0 leading-tight">Lorem Ipsum available, but
                                                                the majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car  me-1 text-muted"></i>
                                                                    Automatic</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1 "></i>4000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>Electric</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden sold-out">
                                                <div class="ribbon ribbon-top-left text-danger"><span
                                                        class="bg-danger">sold out</span></div>
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$862.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/j2.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span>
                                                            <a href="cars.html" class="bg-success">New</a>
                                                            <a href="cars.html" class="bg-danger">Rent</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Exercitationem
                                                                </h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Disel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$635.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/j3.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <span><a href="cars.html" class="bg-success">New</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Cheyenne</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Petrol</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$526.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/h3.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span>
                                                            <a href="cars.html" class="bg-success">New</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Meridian</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Automatic</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    4000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Hybrid</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$256.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/v1.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span>
                                                            <a href="cars.html" class="bg-success">New</a>
                                                            <a href="cars.html" class="bg-danger">Rent</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Specter</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Petrol + CNG</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$987.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/h1.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Roamer</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Petrol + LPG</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$746.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/v2.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Dynamo</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Disel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$869.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/h4.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Nebula</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        2 days ago</span></a>
                                                            </div>
                                                            <p class="mb-0 leading-tight">Lorem Ipsum available, but
                                                                the majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car  me-1 text-muted"></i>
                                                                    Automatic</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1 "></i>4000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>Petrol</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$987.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/j2.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span><a href="cars.html" class="bg-success">New</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Essence Meridian
                                                                </h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Disel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$745.00</div>
                                                    <div id="carouselExampleSlidesOnly1"
                                                        class="carousel car-slide item-card9-imgs"
                                                        data-bs-ride="carousel">
                                                        <a class="link" href="cars.html"></a>
                                                        <div class="carousel-inner br-0">
                                                            <div class="carousel-item active">
                                                                <img src="frontend/assets/images/products/j3.png"
                                                                    alt="img" class="cover-image">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="frontend/assets/images/products/j1.png"
                                                                    alt="img" class="cover-image">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="frontend/assets/images/products/j2.png"
                                                                    alt="img" class="cover-image">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                            href="#carouselExampleSlidesOnly1" role="button"
                                                            data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                            href="#carouselExampleSlidesOnly1" role="button"
                                                            data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <span><a href="cars.html" class="bg-success">New</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Tarragon</h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Hybrid</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$748.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/h4.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span><a href="cars.html" class="bg-gray">Used</a></span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1"> Dignissimos
                                                                </h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        2 days ago</span></a>
                                                            </div>
                                                            <p class="mb-0 leading-tight">Lorem Ipsum available, but
                                                                the majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car  me-1 text-muted"></i>
                                                                    Automatic</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1 "></i>4000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>Electric</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="arrow-ribbon bg-primary">$862.00</div>
                                                    <div class="item-card9-imgs">
                                                        <a class="link" href="cars.html"></a>
                                                        <img src="frontend/assets/images/products/j2.png"
                                                            alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0);"
                                                            class="item-card9-icons1 wishlist active"> <i
                                                                class="fa fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <div class="rating-stars">
                                                            <div class="rating-star sm block my-rating-5"
                                                                data-stars="4s"></div>
                                                        </div>
                                                        <span>
                                                            <a href="cars.html" class="bg-success">New</a>
                                                            <a href="cars.html" class="bg-danger">Rent</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="cars.html" class="text-dark">
                                                                <h4 class="font-weight-semibold mt-1">Exercitationem
                                                                </h4>
                                                            </a>
                                                            <div class="item-card9-desc mb-2">
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-map-marker text-muted me-1"></i>
                                                                        USA</span></a>
                                                                <a href="javascript:void(0);"
                                                                    class="me-4 d-inline-block"><span
                                                                        class=""><i
                                                                            class="fa fa-calendar-o text-muted me-1"></i>
                                                                        5 days ago</span></a>
                                                            </div>
                                                            <p class=" leading-tight">Lorem Ipsum available, but the
                                                                majority have suffered alteration in some form</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer pe-4 ps-4 pt-4 pb-4">
                                                        <div class="item-card9-footer d-sm-flex">
                                                            <div class="">
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Car type"><i
                                                                        class="fa fa-car text-muted me-1"></i>
                                                                    Manual</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="Kilometrs"><i
                                                                        class="fa fa-road text-muted me-1"></i>
                                                                    5000Kms</a>
                                                                <a href="javascript:void(0);"
                                                                    class="w-50 mt-1 mb-1 float-start"
                                                                    title="FuealType"><i
                                                                        class="fa fa-tachometer text-muted me-1"></i>
                                                                    Disel</a>
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
                        <div class="center-block text-center paging-block">
                            <ul class="pagination mb-3">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Lists-->
            </div>
        </div>
    </div>
</section>
<!--/Listing-->
{{-- <!-- Newsletter-->
		<section class="sptb2 bg-white border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-xl-6 col-md-12">
						<div class="sub-newsletter">
							<h3 class="mb-2"><i class="fa fa-paper-plane-o me-2"></i> Subscribe To Our Newsletter</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-lg-5 col-xl-6 col-md-12">
						<div class="input-group sub-input mt-1">
							<input type="text" class="form-control input-lg " placeholder="Enter your Email">
							<div class="">
								<button type="button" class="btn btn-primary btn-lg br-ts-0  br-bs-0">
									Subscribe
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Newsletter--> --}}
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
                        <h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="javascript:void(0);">Buy a
                                CrusaderRecusandae</a></h4>
                        <span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
                        <div class="h6 mb-0 mt-1 font-weight-normal"><span
                                class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="d-flex mt-0 mb-5 mb-lg-0 border br-3 bg-white p-4 box-shadow2">
                    <img class="w-8 h-8 me-4 br-3" src="frontend/assets/images/products/6.png" alt="img">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="javascript:void(0);">Best New
                                Car</a></h4>
                        <span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
                        <div class="h6 mb-0 mt-1 font-weight-normal"><span
                                class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="d-flex mt-0 mb-0 border br-3 bg-white p-4 box-shadow2">
                    <img class="w-8 h-8 me-4 br-3" src="frontend/assets/images/products/6.png" alt="img">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="javascript:void(0);">Fuel
                                Effeciency Car</a></h4>
                        <span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
                        <div class="h6 mb-0 mt-1 font-weight-normal"><span
                                class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent Post-->
<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h3 class="faq">Frequently Asked Questions On Car</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group1" id="accordion2">
                            <div class="panel panel-default">
                                <div class="panel-heading1">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed border border-top-0"
                                            data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-3"
                                            aria-expanded="false">Q 1. How many used cars available in Ahmedabad</a>
                                    </h4>
                                </div>
                                <div id="car-comapre-3" class="panel-collapse collapse " role="tabpanel"
                                    aria-expanded="false">
                                    <div class="panel-body border border-top-0">
                                        561 used cars are available in Ahmedabad of popular brands like Maruti, Hyundai,
                                        Honda, Toyota, Mahindra & more.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading1">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed border border-top-0"
                                            data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-4"
                                            aria-expanded="false">Q 2. What will be the starting price of a used car
                                            in Ahmedabad?</a>
                                    </h4>
                                </div>
                                <div id="car-comapre-4" class="panel-collapse collapse " role="tabpanel"
                                    aria-expanded="false">
                                    <div class="panel-body border border-top-0">
                                        <div class="table-responsive">
                                            561 used car are available in Ahmedabad & the price starts at Rs 55,000 in
                                            Ahmedabad.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading1">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed border border-top-0"
                                            data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-5"
                                            aria-expanded="false">Q 3. What are the most popular brands available for
                                            used cars in Ahmedabad? </a>
                                    </h4>
                                </div>
                                <div id="car-comapre-5" class="panel-collapse collapse " role="tabpanel"
                                    aria-expanded="false">
                                    <div class="panel-body border border-top-0">
                                        <div class="table-responsive">
                                            CarDekho has a wide inventory of all brands including Maruti, Hyundai,
                                            Honda, Toyota, Mahindra & more. Find the best-used car of your choice on
                                            CarDekho.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading1">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed border border-top-0"
                                            data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-6"
                                            aria-expanded="false">Q 4. How many used diesel cars available in
                                            Ahmedabad?</a>
                                    </h4>
                                </div>
                                <div id="car-comapre-6" class="panel-collapse collapse " role="tabpanel"
                                    aria-expanded="false">
                                    <div class="panel-body border border-top-0">
                                        <div class="table-responsive">
                                            Used cars are available in both petrol and diesel options. 348 second-hand
                                            diesel cars available in Ahmedabad. Popular used diesel cars are Ford
                                            Ecosport, Maruti Swift, Maruti Swift & more and price starts at Rs 3.4 Lakh.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading1">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed border border-top-0"
                                            data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-7"
                                            aria-expanded="false">Q 5. What body types are available for used cars in
                                            Ahmedabad?</a>
                                    </h4>
                                </div>
                                <div id="car-comapre-7" class="panel-collapse collapse " role="tabpanel"
                                    aria-expanded="false">
                                    <div class="panel-body border border-top-0">
                                        <div class="table-responsive">
                                            Used cars are available in every segment be it Hatchback, Sedan, SUV,
                                            Luxury, MUV, Minivan and Pickup Truck cars in Ahmedabad. At CarDekho we have
                                            197 Hatchback, 167 Sedan, 141 SUV, 46 Luxury, 41 MUV, 13 Minivan and 1
                                            Pickup Truck Cars available in Ahmedabad.
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
<br>
<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="bg-white row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="">
                            <div class="mb-lg-0 mb-2">
                                <div class="service-card text-center">
                                    <div class="bg-white ">
                                        <img src="frontend/assets/images/media/no.1.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px">India’s #1
                                        </h4>
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px">Auto Portal
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="">
                            <div class="mb-lg-0 mb-4">
                                <div class="service-card text-center">
                                    <div class="bg-white ">
                                        <img src="frontend/assets/images/media/secure.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px">Secure & </h4>
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px"> Hassle-Free
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="">
                            <div class="mb-sm-0 mb-4">
                                <div class="service-card text-center">
                                    <div class="bg-white ">
                                        <img src="frontend/assets/images/media/fair.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px">Fair </h4>
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px">Deals</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="">
                            <div class="">
                                <div class="service-card text-center">
                                    <div class="bg-white">
                                        <img src="frontend/assets/images/media/competitive.png" alt="img">
                                    </div>
                                    <div class="servic-data mt-3">
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px">Competitive
                                        </h4>
                                        <h4 class="font-weight-semibold mb-2" style="font-size:18px"> Pricing</h4>
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
@include('frontend.layouts.footer')
