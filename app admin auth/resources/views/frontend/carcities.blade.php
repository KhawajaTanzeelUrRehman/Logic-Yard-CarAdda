@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Car Cities</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car Cities</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Car Cities</div>
                        <button type="submit" class="btn btn-primary " id="btnOpenForm" style="margin-left: 82%;"><i class="fa fa-plus" aria-hidden="true"></i>
                            Car Cities</button>
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
                                  <form action="{{route('carcities.store')}}" method="post">
                                    @csrf
                                   
                                    <div class="form-group">
                                    <h4 class="page-title s3">Car Cities</h4>  
                                    <div class="form-group s3">
                                        <label class="form-label"> Country Name</label>
                                        <select name="country" name="countryname" id="select-countries" class="form-control form-select select2" placeholder="Select Country">
                                            <option value="india" selected>India</option>
                                            <option value="brazil">Brazil</option>
                                            <option value="czech Republic">Czech Republic</option>
                                            <option value="germany">Germany</option>
                                            <option value="poland" selected>Poland</option>
                                        </select>
                                    </div>


                                    <div class="form-group s3">
                                        <label class="form-label">State Name</label>
                                        <select name="country" name="statename" id="select-countries" class="form-control form-select select2" placeholder="Select Country">
                                            <option value="AP" selected>Andhra Pradesh</option>
                                            <option value="assam">Assam</option>
                                            <option value="bihar">Bihar</option>
                                            <option value="gujrat">Gujarat</option>
                                            <option value="maharashtra" selected>Maharashtra</option>
                                        </select>
                                    </div>
                                      <label class="card-title s3">City</label>
                                      <input class="form-control" name="city" type="text" placeholder="Enter City Name" value="" required="" maxLength="10" />
                                      
                                    </div>
                                				
                                    <div class="form-group">
                                      <label class="card-title s3">Slug</label>
                                      <input class="form-control" name="slug" type="text" placeholder="Enter Slug" required=""/>
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
                                        <th >ID</th>
                                        <th >Country Name</th>
                                        <th >State Name</th>
                                        <th >City</th>
                                        <th >Slug</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach ( $carcitiess as $carcities )
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $carcities->countryname }}</td>
                                        <td>{{ $carcities->statename }}</td>
                                        <td>{{ $carcities->city }}</td>
                                        <td>{{ $carcities->slug }}</td>

                                        <td>
                                            <form action="{{ route('carcities.destroy',$carcities->id) }}" method="POST">

                                                {{-- <a class="btn btn-info" href="{{ route('carcitiess.show',$carcities->id )}}">Show</a> --}}
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
                                    <h2>Car Feature</h2>
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

                <form action="{{ route('carcities.update',$carcities->id) }}"  method="post">
                @csrf

                @method('PUT')

                <div class="row">

                        <div class="from-group">
                            <strong>Country Name</strong>
                            <input type="text" name="countryname" value="{{ $carcities->name }}" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="from-group">
                            <strong>State Name</strong>
                            <input type="text" name="statename" value="{{ $carcities->name }}" class="form-control" placeholder="Enter Name">
                        </div>
                        
                        <div class="from-group">
                            <strong>City</strong>
                            <input type="text" name="city" value="{{ $carcities->name }}" class="form-control" placeholder="Enter Name">
                        </div>
                        
                        <div class="from-group">
                            <strong>SLUG</strong>
                            <input type="text" name="slug" value="{{ $carcities->slug }}" class="form-control" placeholder="Enter slug">
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
                  {{-- panination --}}
              {{-- {{$carfeatures->onEachSide(1)->links()}} --}}

                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>



                            {{-- -----------------pagenation------------- --}}
                            {{-- <nav aria-label="Page navigation example">
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
</div> --}}
@include('frontend.layouts.footer')
