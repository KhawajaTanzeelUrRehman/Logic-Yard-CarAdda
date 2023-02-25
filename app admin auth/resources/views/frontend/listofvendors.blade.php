@include('frontend.layouts.header')
<!--App-Content-->
<div class="app-content  my-3 my-md-5">
	<div class="side-app">
		<div class="page-header">
			<h4 class="page-title">Dashboard</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Vendors list</li>
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
								<a href="#">
								<i class="icon icon-emotsmile text-white "style="margin-left: 25px;"></i></a>
							</div>
							<h5>Ads Count</h5>
							<h2 class="counter mb-0">4388</h2>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">List Of Vendors</h3>
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
										<th class="wd-15p">Action</th>

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
										<td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
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
										<td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
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
										<td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
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
										<td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
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
										<td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
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
										<td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
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