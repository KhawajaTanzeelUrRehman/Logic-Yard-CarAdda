@include('frontend.layouts.header')
<!--App-Content-->
<div class="app-content  my-3 my-md-5">
	<div class="side-app">
		<div class="page-header">
			<h4 class="page-title">Dashboard</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Car list</li>
			</ol>
		</div>
		{{-- <div class="row">
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card ">
					<div class="card-body text-center">
						<div class="counter-status dash3-counter">
							<div class="counter-icon bg-primary text-primary">
                                <a href="index.php">
								<i class="icon icon-people text-white "style="margin-left: 25px;"></i></a>
							</div>
							<h5>Users Count</h5>
							<h2 class="counter mb-0">1554</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card ">
					<div class="card-body text-center">
						<div class="counter-status dash3-counter">
							<div class="counter-icon bg-info text-info">
                                <a href="listofvendors">
								<i class="icon icon-rocket text-white "style="margin-left: 25px;"></i></a>
							</div>
							<h5>Vendors Count</h5>
							<h2 class="counter mb-0">1068</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card ">
					<div class="card-body text-center">
						<div class="counter-status dash3-counter">
							<div class="counter-icon bg-success text-success">
                                <a href="carlist">
								<i class="icon icon-docs text-white "style="margin-left: 25px;"></i></a>
							</div>
							<h5>Cars Listed</h5>
							<h2 class="counter mb-0">5426</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card ">
					<div class="card-body text-center">
						<div class="counter-status dash3-counter">
							<div class="counter-icon bg-danger text-danger">
								<i class="icon icon-emotsmile text-white "style="margin-left: 25px;"></i>
							</div>
							<h5>Ads Count</h5>
							<h2 class="counter mb-0">4388</h2>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		{{-- <div class="row">
			<div class="col-xl-4 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Finance State</h3>
					</div>
					<div class="card-body">
						<canvas id="finance" class=" chartjs-render-monitor chart-dropshadow2 h-220"></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4 col-md-12">
				<div class="card car-comparision">
					<div class="item7-card-img d-flex">
						<img src="frontend/assets//images/media/media2.jpg" alt="img" class="cover-image w-50">
						<img src="frontend/assets//images/media/media1.jpg" alt="img" class="cover-image w-50">
					</div>
					<div class="card-image-difference">Vs</div>
					<div class="card-body p-4">
						<div class="row">
							<div class="col">
								<h4>Interstate</h4>
								<h6>456-987</h6>
							</div>
							<div class="col">
								<h4>Quaerat</h4>
								<h6>785-841</h6>
							</div>
						</div>
						<a class="btn btn-primary btn-block mt-3" href="car-compare.html">Interstate Vs Quaerat</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-4 col-lg-6"> --}}
				{{-- <div class="card car-comparision">
					<div class="item7-card-img d-flex">
						<img src="frontend/assets//images/media/media3.jpg" alt="img" class="cover-image w-50">
						<img src="frontend/assets//images/media/media4.jpg" alt="img" class="cover-image w-50">
					</div>
					<div class="card-image-difference">Vs</div>
					<div class="card-body p-4">
						<div class="row">
							<div class="col">
								<h4>Millenium</h4>
								<h6>456-987</h6>
							</div>
							<div class="col">
								<h4>Quaerat</h4>
								<h6>785-841</h6>
							</div>
						</div>
						<a class="btn btn-primary btn-block mt-3" href="car-compare.html">Millenium Vs Quaerat</a>
					</div>
				</div>
			</div>
		</div> --}}

		{{-- <div class="row ">
			<div class="col-xl-4 col-lg-12">
				<div class="card ">
					<div class="card-header">
						<div class="card-title">Dailywise Feedback</div>
					</div>
					<div class="card-body">
						<div id="feedback" class="chartsh"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-xl-4">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Daily Analytics</div>
					</div>
					<div class="card-body overflow-hidden">
						<div id="placeholder4" class="chartsh"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 col-xl-4">
				<div class="card">
					<div class="card-header border-bottom">
						<h5 class="card-title">Sales Summary</h5>
					</div>
					<div class="card-body">
						<div class="clearfix row mb-4">
							<div class="col">
								<div class="float-start">
									<h5 class="mb-0"><strong>Total Revenue</strong></h5>
									<small class="text-muted">weekly profit</small>
								</div>
							</div>
							<div class="col">
								<div class="float-end">
									<h4 class="font-weight-bold mb-0 mt-2 text-primary">15300</h4>
								</div>
							</div>
						</div>
						<div class="clearfix row mb-4">
							<div class="col">
								<div class="float-start">
									<h5 class="mb-0"><strong>Total Tax</strong></h5>
									<small class="text-muted">weekly profit</small>
								</div>
							</div>
							<div class="col">
								<div class="float-end">
									<h4 class="font-weight-bold mt-2 mb-0 text-success">1625</h4>
								</div>
							</div>
						</div>
						<div class="clearfix row mb-4">
							<div class="col">
								<div class="float-start">
									<h5 class="mb-0"><strong>Total Income</strong></h5>
									<small class="text-muted">weekly profit</small>
								</div>
							</div>
							<div class="col">
								<div class="float-end">
									<h4 class="font-weight-bold mt-2 mb-0 text-warning">70%</h4>
								</div>
							</div>
						</div>
						<div class="clearfix row mb-4">
							<div class="col">
								<div class="float-start">
									<h5 class="mb-0"><strong>Total Cars</strong></h5>
									<small class="text-muted">weekly Cars</small>
								</div>
							</div>
							<div class="col">
								<div class="float-end">
									<h4 class="font-weight-bold mt-2 mb-0 text-danger">5849</h4>
								</div>
							</div>
						</div>
						<div class="clearfix row mb-0">
							<div class="col">
								<div class="float-start">
									<h5 class="mb-0"><strong>Total Loss</strong></h5>
									<small class="text-muted">weekly profit</small>
								</div>
							</div>
							<div class="col">
								<div class="float-end">
									<h4 class="font-weight-bold mt-2 mb-0 text-secondary">30%</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">List Of Car</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive  mb-0 ">
							<table class="table table-bordered table-hover text-nowrap mb-0">
								<thead>
									<tr>
										<th>Order ID</th>
										<th>Category</th>
										<th>Date</th>
										<th>Price</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#89345</td>
										<td>Blanditiis Venue</td>
										<td>07-12-2018</td>
										<td class="font-weight-semibold fs-16">893</td>
										<td>
											<a href="javascript:void(0);" class="badge badge-danger">Pending</a>
										</td>
									</tr>
									<tr>
										<td>#39281</td>
										<td>Voluptates XUV300</td>
										<td>12-11-2018</td>
										<td class="font-weight-semibold fs-16">254</td>
										<td>
											<a href="javascript:void(0);" class="badge badge-primary">Completed</a>
										</td>
									</tr>
									<tr>
										<td>#35825</td>
										<td>Chittenden</td>
										<td>15-11-2018</td>
										<td class="font-weight-semibold fs-16">352</td>
										<td>
											<a href="javascript:void(0);" class="badge badge-success">Activated</a>
										</td>
									</tr>
									<tr>
										<td>#62391</td>
										<td>Possimus</td>
										<td>10-11-2018</td>
										<td class="font-weight-semibold fs-16">643</td>
										<td>
											<a href="javascript:void(0);" class="badge badge-danger">Pending</a>
										</td>
									</tr>
									<tr>
										<td>#92481</td>
										<td>Jeep Compass</td>
										<td>07-11-2018</td>
										<td class="font-weight-semibold fs-16">392</td>
										<td>
											<a href="javascript:void(0);" class="badge badge-primary">Activated</a>
										</td>
									</tr>
									<tr>
										<td>#29381</td>
										<td>Blanditiis Venue</td>
										<td>31-10-2018</td>
										<td class="font-weight-semibold fs-16">295</td>
										<td>
											<a href="javascript:void(0);" class="badge badge-danger">Pending</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--App-Content-->
</div>



@include('frontend.layouts.footer')


