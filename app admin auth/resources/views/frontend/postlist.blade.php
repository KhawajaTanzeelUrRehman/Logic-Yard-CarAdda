@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Car Post List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car Post List</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Car Post List</div>
                        {{-- <button type="submit" class="btn btn-primary " id="btnOpenForm" style="margin-left: 82%;"><i class="fa fa-plus" aria-hidden="true"></i>
                            Car Bodies</button> --}}
                           

                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dtBasicExample" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th class="wd-15p">ID</th>
                                        <th class="wd-15p">Upload Image</th>
                                        <th class="wd-20p">Module</th>
                                        <th class="wd-15p">Start Date</th>
                                        <th class="wd-15p">End Date</th>
                                        <th class="wd-20p">State</th>
                                        <th class="wd-15p">City</th>
                                        {{-- <th class="wd-15p">Zip</th> --}}
                                  
                                        <th class="wd-15p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                  
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                                                       
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                            </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                    
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
                                        <td>
                                            <a class="badge badge-success"  data-original-title="View"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>
                                            <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a><br>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Chloe</td>
                                        <td>vendor</td>
                                        <td>1/1/2020</td>
                                        <td>10/2/2023</td>
                                        <td>Maharashtra</td>
                                        <td>Mumbai</td>
                                        {{-- <td>400709</td> --}}
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