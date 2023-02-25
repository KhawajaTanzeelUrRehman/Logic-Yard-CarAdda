@include('frontend.layouts.header')
<!--App-Content-->
<div class="app-content  my-3 my-md-5">
	<div class="side-app">
		<div class="page-header">
			<h4 class="page-title">Dashboard</h4>
			<ol class="breadcrumb">
				{{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li> --}}
				<li class="breadcrumb-item active" aria-current="page">Dashboard </li>
			</ol>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card ">
					<div class="card-body text-center">
						<div class="counter-status dash3-counter">
							<div class="counter-icon bg-primary text-primary">
								<a href="index.php">
								<i class="icon icon-people text-white " style="margin-left: 25px;"></i></a>
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
								<i class="icon icon-emotsmile text-white"style="margin-left: 25px;"></i>
							</div>
							<h5>Ads Count</h5>
							<h2 class="counter mb-0">4388</h2>
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
