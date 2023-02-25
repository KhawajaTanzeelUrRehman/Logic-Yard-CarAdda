@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Car Prices</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car Prices</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Car Prices</div>
                        <button type="submit" class="btn btn-primary " id="btnOpenForm" style="margin-left: 82%;"><i class="fa fa-plus" aria-hidden="true"></i>
                            Car Prices</button>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                  <button id="btnCloseForm" class="close-button">X</button>
                                  <form action="">
                                   
                                    <div class="form-group">
                                        <h4 class="page-title s3">Car Prices</h4>
                                        
                                      <label class="card-title s3">Name*</label>
                                     
                                      <input class="form-control" type="text" placeholder="Enter Name" value="" required="" maxLength="10" />
                                      
                                    </div>
                                				
                                    <div class="form-group">
                                      <label class="card-title s3">Slug*</label>
                                      <input class="form-control" type="text" placeholder="Enter Slug" required=""/>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary" style="margin-top: 9.5px;">Close</button>
                                    <button type="submit" class="btn btn-success mt-2">Save</button>
                                  </form>
                                </div>
                              </div>

                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dtBasicExample" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">Distance</th>
                                        <th class="wd-20p">Display Distance</th>
                                        <th class="wd-15p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>5-1 LAKH</td>
                                        <td>5000-10000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>10-15LAKH</td>
                                        <td>10000-15000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>15-2LAKH</td>
                                        <td>15000-20000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>20-25LAKH</td>
                                        <td>20000-25000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                                                       
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>25-30LAKH</td>
                                        <td>25000-30000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>30-35LAKH</td>
                                        <td>30000-35000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                   </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>50000-10LAKH</td>
                                        <td>5000-10000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>10-15LAKH</td>
                                        <td>10000-15000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>20-25LAKH</td>
                                        <td>20000-25000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>150-20LAKH</td>
                                        <td>15000-20000</td>
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            {{-- -----------------pagenation------------- --}}
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </nav>

                        </div>
                    </div>
                    <!-- table-wrapper -->
                </div>

                
                <!-- section-wrapper -->
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')