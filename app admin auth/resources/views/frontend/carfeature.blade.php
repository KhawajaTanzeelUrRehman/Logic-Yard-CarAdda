@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Car Features</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car Features</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Car Features</div>
                        <button type="submit" class="btn btn-primary " id="btnOpenForm" style="margin-left: 86%;"><i class="fa fa-plus" aria-hidden="true"></i>
                            Car Features</button>
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
                                  <form action="{{route('carfeature.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <h4 class="page-title s3">Car Features</h4>

                                      <label class="card-title s3">Name*</label>

                                      <input class="form-control" type="text" name="name" placeholder="Enter Name" value="" required="" maxLength="10" />

                                    </div>

                                    <div class="form-group">
                                      <label class="card-title s3">Slug*</label>
                                      <input class="form-control" type="text" name="slug" placeholder="Enter Slug" required=""/>
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
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $carfeatures as $carfeature )
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $carfeature->name }}</td>
                                        <td>{{ $carfeature->slug }}</td>

                                        <td>
                                            <form action="{{ route('carfeature.destroy',$carfeature->id) }}" method="POST">

                                                {{-- <a class="btn btn-info" href="{{ route('carfeatures.show',$carfeature->id )}}">Show</a> --}}
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

                <form action="{{ route('carfeature.update',$carfeature->id) }}"  method="post">
                @csrf

                @method('PUT')

                <div class="row">

                        <div class="from-group">
                            <strong>NAME</strong>
                            <input type="text" name="name" value="{{ $carfeature->name }}" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="from-group">
                            <strong>SLUG</strong>
                            <input type="text" name="slug" value="{{ $carfeature->slug }}" class="form-control" placeholder="Enter slug">
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
