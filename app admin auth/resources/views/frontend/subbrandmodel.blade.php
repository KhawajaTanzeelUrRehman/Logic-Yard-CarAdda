@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Car Sub Next Brands</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car Sub Brands</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Car Sub Next Brands</div>
                        <button type="submit" class="btn btn-primary " id="btnOpenForm" style="margin-left: 78%;"><i class="fa fa-plus" aria-hidden="true"></i>
                            Car Sub Next Brands</button>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                  <button id="btnCloseForm" class="close-button">X</button>
                                    @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <strong>Whoops!</strong>there were some problems with your input.<br><br>

                                      <ul>
                                          @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>

                                          @endforeach
                                      </ul>
                                  </div>

                                  @endif
                                  <form action="{{route('carsubbrandmodel.store')}}" method="post">
                                    @csrf
                                   
                                    <div class="form-group">
                                        <h4 class="page-title s3">Car Sub Next Brands</h4>
                                        
                                      <label class="card-title s3">Brand Name*</label>
                                     
                                      <input class="form-control" name="brandname" type="text" placeholder="Enter Brand Name" value="" required="" maxLength="10" />
                                      
                                    </div>

                                    <div class="form-group">                                        
                                      <label class="card-title s3">Sub Brand Name*</label>
                                     
                                      <input class="form-control" name="subbrandname" type="text" placeholder="Enter SubBrand Name" value="" required="" maxLength="10" />
                                      
                                    </div>
                                	
                                    <div class="form-group">                                        
                                        <label class="card-title s3">Sub Next Brand  Name*</label>
                                       
                                        <input class="form-control" name="nextbrandname" type="text" placeholder="Enter Name" value="" required="" maxLength="10" />
                                        
                                      </div>
                                    
                                    <div class="form-group">
                                      <label class="card-title s3">Slug*</label>
                                      <input class="form-control" name="slug" type="text" placeholder="Enter Slug" required=""/>
                                    </div>

                                   <div class="form-group">
                                        <label class="card-title s3">Image</label>
                                        <input class="form-control" type="file" name="image" class="dropify" data-height="180" placeholder="Enter Slug" required=""/>

                                      </div>
                                  
                                     
                                       <button type="submit" class="btn btn-success mt-2">Submit</button>
                                   </form>
                            </div>
                          </div>
                        </div>
                        @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dtBasicExample" class="table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Brand Name</th>
                                        <th>Sub Brand Name</th>
                                        <th>Sub Next Brand Name</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ( $carsubbrandmodels as $carsubbrandmodel)
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $carsubbrandmodel->brandname }}</td>
                                        <td>{{ $carsubbrandmodel->subbrandname }}</td>
                                        <td>{{ $carsubbrandmodel->nextbrandname }}</td>
                                        <td>{{ $carsubbrandmodel->slug }}</td>
                                        <td>{{ $carsubbrandmodel->image }}</td>

                                        <td>
                                            <form action="{{ route('carsubbrandmodel.destroy',$carsubbrandmodel->id) }}" method="POST">

                                                {{-- <a class="btn btn-info" href="{{ route('carsubbrandmodel.show',$carsubbrandmodel->id )}}">Show</a> --}}
                                                <a class="btn btn-success" href="#popup1">
                                                    <i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>


                                                @csrf

                                                @method('DELETE')

                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></button>

                                                </form>

                                            </td>
                                        </tr>

                                        @endforeach
                                </tbody>
                            </table>



                            {{-- -------------edit popup------------ --}}
                            <div id="popup1" class="overlay">
                                <div class="popup">
                                    <h2>Car Sub Model</h2>
                                    <a class="close" href="#">&times;</a>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>whoops!</strong>threre is some problems <br><br>

                        <ul>
                            @foreach ($errors->all() as $error )

                            <li>{{ $error}}</li>

                            @endforeach
                        </ul>
                    </div>

                @endif
 
                <form action="{{ route('carsubbrandmodel.update',$carsubbrandmodel->id) }}"  method="post">
                @csrf

                @method('PUT')

                <div class="row">

                        <div class="from-group">
                            <strong>Brand Name</strong>
                            <input type="text" name="brandname" value="{{ $carsubbrandmodel->brandname }}" class="form-control" placeholder="Enter Brand Name">
                        </div>

                        <div class="from-group">
                            <strong>Sub Brand Name</strong>
                            <input type="text" name="subbrandname" value="{{ $carsubbrandmodel->subbrandname }}" class="form-control" placeholder="Enter Sub Brand Name">
                        </div>
                        <div class="from-group">
                            <strong>Sub Next Brand Name</strong>
                            <input type="text" name="subnextbrandname" value="{{ $carsubbrandmodel->subnextbrandname }}" class="form-control" placeholder="Enter Sub Next Brand Name">
                        </div>

                        <div class="from-group">
                            <strong>Slug</strong>
                            <input type="text" name="slug" value="{{ $carsubbrandmodel->slug }}" class="form-control" placeholder="Enter slug">
                        </div>
                    <div class="form-group">
                        <label class="card-title s3">Image</label>
                        <input class="from-control s4" type="file" value="{{ $carsubbrandmodel->image }}" name="image"  placeholder="image">
                    </div>
                            
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>


                                              {{-- </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                                </table> --}}
              <!--    {{-- panination --}}-->
              <!--{{-- {{$carfeatures->onEachSide(1)->links()}} --}}-->

                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>



                            {{-- -----------------pagenation------------- --}}
<!--                            {{-- <nav aria-label="Page navigation example">-->
<!--                                <ul class="pagination">-->
<!--                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>-->
<!--                                  <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--                                  <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                                  <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
<!--                                </ul>-->
<!--                              </nav>-->

<!--                        </div>-->
<!--                    </div>-->
                    <!-- table-wrapper -->
<!--                </div>-->


                <!-- section-wrapper -->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div> --}}-->
@include('frontend.layouts.footer')
