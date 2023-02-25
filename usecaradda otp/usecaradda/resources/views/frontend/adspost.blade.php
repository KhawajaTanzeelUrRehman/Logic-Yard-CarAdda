
@include('frontend.layouts.header')
<!--Section-->
<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="frontend/assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Sell Your Car</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li> -->
								<li class="breadcrumb-item active text-white" aria-current="page">Sell Your Car</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="card mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">Sell Your Car</h3>
							</div>
							<div class="card-body">
								<form id="commentForm" method="get" class="border form-horizontal mb-0 br-3">
									<div id="rootwizard" class="pt-0 mx-1">
										<ul class="nav nav-tabs nav-justified">
											<li class="nav-item"><a href="#first" data-bs-toggle="tab" class="nav-link font-bold">Select category</a></li>
											<li class="nav-item"><a href="#second" data-bs-toggle="tab" class="nav-link font-bold">Details</a></li>
											<li class="nav-item"><a href="#third" data-bs-toggle="tab" class="nav-link font-bold">Personal Details</a></li>
											<li class="nav-item"><a href="#fourth" data-bs-toggle="tab" class="nav-link font-bold ">Payment</a></li>
										</ul>
										<div class="tab-content card-body mt-3 mb-0 b-0">
											<div class="tab-pane fade" id="first">
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Ad Title</label>
														<input type="text" class="form-control required Title" placeholder="">
													</div>
												</div>
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Category</label>
														<select class="form-control form-select select2 required category">
															<option value="0">Select Option</option>
															<option value="1">Vehicle</option>
															<option value="2">Vehicles</option>
															<option value="3">CrusaderRecusandae</option>
															<option value="4">Eternity Quaerat</option>
															<option value="5">Vehicles</option>
															<option value="6">CrusaderRecusandae</option>
															<option value="7">Vehicles</option>
															<option value="8">Vehicle</option>
															<option value="9">Modren Vehicles</option>
															<option value="10">Farm Vehicles</option>
															<option value="11">Vehicles</option>
															<option value="12">Specter</option>
															<option value="13">CrusaderRecusandae</option>
															<option value="14">Shrinking  Moco</option>
														</select>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="second">
												<div class="control-group form-group">
													<label class="form-label text-dark">Type of Ad</label>
													<div class="d-flex ad-post-details">
														<label class="custom-control custom-radio mb-2 me-4 ">
															<input type="radio" class="custom-control-input" name="radios1" value="option1" checked="">
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">I Want to Sell</a></span>
														</label>
														<label class="custom-control custom-radio  mb-2">
															<input type="radio" class="custom-control-input" name="radios1" value="option2" >
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">I Want to Buy</a></span>
														</label>
													</div>
												</div>
												<div class="control-group form-group">
													<label class="form-label text-dark">Type of Condition</label>
													<div class="d-flex ad-post-details">
														<label class="custom-control custom-radio mb-2 me-4">
															<input type="radio" class="custom-control-input" name="radios2" value="option1" checked="">
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">New </a></span>
														</label>
														<label class="custom-control custom-radio  mb-2">
															<input type="radio" class="custom-control-input" name="radios2" value="option2" >
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">Used</a></span>
														</label>
													</div>
												</div>
												<div class="control-group form-group">
													<label class="form-label text-dark">Description</label>
													<textarea class="form-control required" name="example-textarea-input" rows="6" placeholder="text here.."></textarea>
												</div>
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control " type="file">
												</div>
												<div class="control-group form-group">
													<label class="form-label text-dark">Ad Post Package</label>
													<div class="d-md-flex ad-post-details">
														<label class="custom-control custom-radio mb-2 me-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option1" checked="">
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">30 Days Free</a></span>
														</label>
														<label class="custom-control custom-radio  mb-2 me-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option2" >
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">60 days / 20$</a></span>
														</label>
														<label class="custom-control custom-radio  mb-2 me-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option3" >
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">6months / 50$</a></span>
														</label>
														<label class="custom-control custom-radio  mb-2">
															<input type="radio" class="custom-control-input" name="radios1" value="option4" >
															<span class="custom-control-label"><a href="javascript:void(0);" class="text-muted">1 year / 80$</a></span>
														</label>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="third">
												<div class="control-group form-group">
													<label class="form-label">Name</label>
													<input type="text" class="form-control required" placeholder="Name">
												</div>
												<div class="control-group form-group">
													<label class="form-label">Email</label>
													<input type="email" class="form-control required" placeholder="Email Address">
												</div>
												<div class="control-group form-group">
													<label class="form-label">Phone Number</label>
													<input type="number" class="form-control required" placeholder="Number">
												</div>
												<div class="control-group form-group mb-0">
													<label class="form-label">Address</label>
													<input type="text" class="form-control required" placeholder="Address">
												</div>
											</div>
											<div class="tab-pane fade" id="fourth">
												<div class="panel panel-primary">
													<div class=" tab-menu-heading border-0 ps-0 pe-0 pt-0">
														<div class="tabs-menu1 ">
															<!-- Tabs -->
															<ul class="nav panel-tabs">
																<li><a href="#tab5" class="active" data-bs-toggle="tab">Credit/ Debit Card</a></li>
																<li><a href="#tab6" data-bs-toggle="tab">Pay-pal</a></li>
																<li><a href="#tab7" data-bs-toggle="tab">Net Banking</a></li>
																<li><a href="#tab8" data-bs-toggle="tab">Gift Voucher</a></li>
															</ul>
														</div>
													</div>
													<div class="panel-body tabs-menu-body ps-0 pe-0 border-0">
														<div class="tab-content">
															<div class="tab-pane active " id="tab5">
																<div class="form-group">
																	<label class="form-label" >CardHolder Name</label>
																	<input type="text" class="form-control" id="name1" placeholder="First Name">
																</div>
																<div class="form-group">
																	<label class="form-label">Card number</label>
																	<div class="input-group">
																		<input type="text" class="form-control" placeholder="Search for...">
																		<span class="">
																			<button class="btn btn-info br-ts-0 br-bs-0" type="button"><i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																			<i class="fa fa-cc-mastercard"></i></button>
																		</span>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-8">
																		<div class="form-group mb-sm-0">
																			<label class="form-label">Expiration</label>
																			<div class="input-group">
																				<input type="number" class="form-control" placeholder="MM" name="expiremonth">
																				<input type="number" class="form-control" placeholder="YY" name="expireyear">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4 ">
																		<div class="form-group mb-0">
																			<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
																			<input type="number" class="form-control" required="">
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane " id="tab6">
																<h6 class="font-weight-semibold">Paypal is easiest way to pay online</h6>
																<p><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a></p>
																<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
															</div>
															<div class="tab-pane " id="tab7">
																<div class="control-group form-group">
																	<div class="form-group">
																		<label class="form-label text-dark">All Banks</label>
																		<select class="form-control form-select required category">
																			<option value="0">Select Bank</option>
																			<option value="1">Credit Agricole Group</option>
																			<option value="2">Bank of America</option>
																			<option value="3">Mitsubishi UFJ Financial Group</option>
																			<option value="4">BNP Paribas</option>
																			<option value="5">JPMorgan Chase & Co.</option>
																			<option value="6">HSBC Holdings</option>
																			<option value="7">Bank of China</option>
																			<option value="8">Agricultural Bank of China</option>
																			<option value="9">ChinaQuaerat Bank Corp.</option>
																			<option value="10">Industrial & Commercial Bank of China, or ICBC</option>
																		</select>
																	</div>
																</div>
																<p><a href="javascript:void(0);" class="btn btn-primary">Log in Bank</a></p>
															</div>
															<div class="tab-pane " id="tab8">
																<div class="form-group">
																	<label class="form-label">Gift Voucher</label>
																	<div class="input-group">
																		<input type="text" class="form-control" placeholder="Enter Your Gv Number">
																		<span class="">
																			<button class="btn btn-info" type="button">
																			Apply</button>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row clearfix">
													<div class="col-lg-12">
														<div class="checkbox checkbox-info">
															<label class="custom-control mt-4 custom-checkbox">
																<input type="checkbox" class="custom-control-input" />
																<span class="custom-control-label text-dark ps-2">I agree with the Terms and Conditions.</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<ul class="list-inline wizard mb-0 mt-4">
												<li class="previous list-inline-item"><a href="javascript:void(0);" class="btn btn-secondary mb-0 waves-effect waves-light">Previous</a>
												</li>
												<li class="next list-inline-item float-end"><a href="javascript:void(0);" class="btn btn-primary  mb-0 me-2 waves-effect waves-light">Continue</a></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Terms And Conditions</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec vertical-scroll mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
								</ul>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Benefits Of Premium Ad</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec  mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
									</li>
									<li class="ms-5 mb-0">
										<a href="tips.html"> View more..</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- end row -->
			</div>
		</section>
		<!--/Section-->

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