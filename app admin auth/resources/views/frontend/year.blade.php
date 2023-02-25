@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Car Years</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car Years</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Car Years</div>
                        <button type="submit" class="btn btn-primary " id="btnOpenForm" style="margin-left: 82%;"><i class="fa fa-plus" aria-hidden="true"></i>
                            Car Years</button>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                  <button id="btnCloseForm" class="close-button">X</button>
                                  <button id="btnCloseForm" class="close-button">X</button>
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
                                                              
                                        <form action="{{ route('year.store')}}" method="post">
                                          @csrf
                                   
                                    <div class="form-group">
                                        <h4 class="page-title s3">Car Years</h4>
                                        
                                      <label class="card-title s3">MINIMUM*</label>
                                     
                                      <input class="form-control" type="text" name="minimum" placeholder="Enter Minimum" value="" required="" maxLength="10" />
                                      
                                    </div>
                                				
                                    <div class="form-group">
                                      <label class="card-title s3">MAXIMUM*</label>
                                      <input class="form-control" type="text" name="maximum" placeholder="Enter Maximum" required=""/>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                                </form>
                            </div>
                            </div>
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
                                        <th>MINIMUM</th>
                                        <th>MAXIMUM</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $years as $year )
                                    <tr>
                                        <td>{{ $year->id}}</td>
                                        <td>{{ $year->minimum}}</td>
                                        <td>{{ $year->maximum}}</td>
                                      
                                        <td>
                        <form action="{{ route('year.destroy',$year->id) }}" method="POST">
                                
                            @csrf  
                            @method('DELETE')
                            <a class="button btn btn-success" href="#popup1"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>                   
                        
                            <button type="submit" class="btn btn-danger" ><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></button>
                            </form>
                                <div id="popup1" class="overlay">
                                <div class="popup">
                                    <h2>Car Year</h2>
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
                
                <form action="{{ route('year.update',$year->id) }}"  method="post">
                @csrf
                
                @method('PUT')
                
                <div class="row">
               
                        <div class="from-group">
                            <strong>MINIMUM</strong>
                            <input type="text" name="minimum" value="{{ $year->minimum }}" class="form-control" placeholder="Enter minimum year">
                        </div>
              
                        <div class="from-group">
                            <strong>MAXIMUM</strong>
                            <input type="text" name="maximum" value="{{ $year->maximum }}" class="form-control" placeholder="Enter maximum year">
                        </div>
              
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>   
                                
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                </tbody>
                                </table>
                                
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
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                


                                
  @include('frontend.layouts.footer')
                                
                                