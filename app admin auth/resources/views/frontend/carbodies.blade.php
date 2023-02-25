@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Car Bodies</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car Bodies</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Car Bodies</div>
                        <button type="submit" class="btn btn-primary " id="btnOpenForm" style="margin-left: 82%;"><i class="fa fa-plus" aria-hidden="true"></i>
                            Car Bodies</button>
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

                                  <form action="{{ route('carbodies.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <h4 class="page-title s3">Car Bodies</h4>

                                      <label class="card-title s3">Name*</label>

                                      <input class="form-control" type="text" name="name" placeholder="Enter Name" value="" required="" maxLength="10" />

                                    </div>

                                    <div class="form-group">
                                      <label class="card-title s3">Slug*</label>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $carbodiess as $carbodies )
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $carbodies->name }}</td>
                                        <td>{{ $carbodies->slug }}</td>
                                        <td>
                                            <form action="{{ route('carbodies.destroy',$carbodies->id) }}" method="POST">

                                                {{-- <a class="btn btn-info" href="{{ route('carbodiess.show',$carbodies->id )}}">Show</a> --}}
                                                <a class="btn btn-success" href="#popup1_{{$i}}">
                                                    <i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>


                                                @csrf

                                                @method('DELETE')

                                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></button>

                                                </form>

                                            </td>
                                        </tr>
                            {{-- -------------edit popup------------ --}}
                            
                            <div id="popup1_{{$i}}" class="overlay">
                                <div class="popup">
                                    <h2>Car Brand</h2>
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

                <form action="{{ route('carbodies.update',$carbodies->id) }}"  method="post">
                @csrf

                @method('PUT')

                <div class="row">

                        <div class="from-group">
                            <strong>NAME</strong>
                            <input type="text" name="name" value="{{ $carbodies->name }}" class="form-control" placeholder="Enter Name">
                        </div>

                        <div class="from-group">
                            <strong>SLUG</strong>
                            <input type="text" name="slug" value="{{ $carbodies->slug }}" class="form-control" placeholder="Enter slug">
                        </div>

                    <div class="form-group">
                        <label class="card-title s3">Image</label>
                        <input class="from-control s4" type="file" value="{{ $carbodies->image }}" name="image"  placeholder="image">
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

                                        @endforeach
                                </tbody>
                            </table>



                                        {{-- </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                                </table> --}}
                  {{-- panination --}}
              {{-- {{$carbodiess->onEachSide(1)->links()}} --}}

                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>


@include('frontend.layouts.footer')
