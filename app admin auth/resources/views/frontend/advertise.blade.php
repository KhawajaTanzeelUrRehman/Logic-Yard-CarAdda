@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h1 class="page-title">packages </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">packages </li>
            </ol>
        </div>
  
        <div class="row" style=" margin-left: 23%;width: 100%;">
            {{-- <div class="col-xs-12 col-md-6 col-xl-3 mt-2">
                <div class="panel price  panel-color card overflow-hidden">
                    <div class="ribbon ribbon-top-left text-primary"><span class="bg-primary">Free</span></div>
                    <div class="panel-body text-center">
                        <p class="display-4 mb-0">₹0.00</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><span class="font-weight-semibold"> Free</span> Ad Posting</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 0 </span> Featured Ad</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 100% </span> Secure</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> Custom </span> Reviews</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 24/7</span> support</li>
                    </ul>
                    <div class="panel-footer text-center">
                        <a class="btn btn-primary" href="javascript:void(0);">Purchase Now</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-xs-12 col-md-6 col-xl-3 mt-2">
                <div class="panel price  panel-color card overflow-hidden">
                    <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Premium</span></div>
                    <div class="panel-body text-center">
                        <p class="display-4 mb-0">₹3000</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><span class="font-weight-semibold"> Featured</span> Ad Posting</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 20 </span> Featured Ad</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 100% </span> Secure</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> Custom </span> Reviews</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 24/7</span> support</li>
                    </ul>
                    <div class="panel-footer text-center">
                        <a class="btn btn-primary" href="#">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-xl-3 mt-2">
                <div class="panel price  panel-color card overflow-hidden">
                    <div class="ribbon ribbon-top-left text-info"><span class="bg-info">Silver</span></div>
                    <div class="panel-body text-center">
                        <p class="display-4 mb-0">₹5000</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><span class="font-weight-semibold"> Featured</span> Ad Posting</li>
                        <li class="list-group-item"><span class="font-weight-semibold">30 </span> Featured Ad</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 100% </span> Secure</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> Custom </span> Reviews</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 24/7</span> support</li>
                    </ul>
                    <div class="panel-footer text-center">
                        <a class="btn btn-primary" href="#">Buy Now</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xs-12 col-md-6 col-xl-3 mt-2">
                <div class="panel price  panel-color card overflow-hidden">
                    <div class="ribbon ribbon-top-left text-yellow"><span class="bg-yellow">Gold</span></div>
                    <div class="panel-body text-center">
                        <p class="display-4 mb-0">₹78</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><span class="font-weight-semibold"> Featured</span> Ad Posting</li>
                        <li class="list-group-item"><span class="font-weight-semibold">50 </span> Featured Ad</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 100% </span> Secure</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> Custom </span> Reviews</li>
                        <li class="list-group-item"><span class="font-weight-semibold"> 24/7</span> support</li>
                    </ul>
                    <div class="panel-footer text-center">
                        <a class="btn btn-primary" href="javascript:void(0);">Purchase Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
    

{{-- ---------------list----------------------- --}}
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of package Buyer</h3>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap">
                <thead>
                    <tr>
                        <th>Module Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Price</th>
                        <th>Status</th>                   
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="store.html" class="text-inherit">Untrammelled prevents </a></td>
                        <td>28 May 2019</td>
                        <td>28 May 2020</td>
                        <td>₹56,908</td>
                        <td><span class="status-icon bg-success"></span> Completed</td>
                        <td>
                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                        <td>12 June 2019</td>
                        <td>12 June 2020</td>
                        <td>₹45,087</td>
                        <td><span class="status-icon bg-danger"></span> On going</td>
                        <td>
                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                        <td>12 July 2019</td>
                        <td>12 July 2020</td>
                        <td>₹60,123</td>
                        <td><span class="status-icon bg-warning"></span> Pending</td>                       
                        <td>
                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                        <td>14 June 2019</td>
                        <td>14 June 2020</td>
                        <td>₹70,435</td>
                        <td><span class="status-icon bg-warning"></span> Pending</td>                        
                        <td >
                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="store.html" class="text-inherit">Untrammelled prevents</a></td>
                        <td>25 June 2019</td>
                        <td>25 June 2020</td>
                        <td>₹15,987</td>
                        <td><span class="status-icon bg-success"></span> Completed</td>
                        <td>
                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-green btn-sm"><i class="fa fa-link"></i> Update</a>

                            <a class="icon" href="javascript:void(0);"></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
<!--/App-Content-->


</div>
</div>
</div>

@include('frontend.layouts.footer')