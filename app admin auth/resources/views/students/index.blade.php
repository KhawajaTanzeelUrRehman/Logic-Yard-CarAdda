@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">student</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">student</li>
            </ol>
        </div>

<div class="row">
    <div class="col-md-12 col-lg-12 margin-tb">
        <div class="card">
            <div class="card-header">
                <div class="card-title">student</div>
                <button type="submit" class="btn btn-primary" id="btnOpenForm" style="margin-left: 82%;">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    student</button>
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

    <form action="{{ route('students.store')}}" method="post">
    @csrf


            <div class="form-group">
                <h4 class="page-title s3">School</h4>
                <label class="card-title s3">Student Name*</label><br>
                <input class="from-control s4" type="text" name="studname"  placeholder="studentname" value="" required="" maxLength="10" />
            </div>

            <div class="form-group">
                <label class="card-title s3 ">Course*</label><br>
                <input class="from-control s4" type="text" name="course"  placeholder="course">
            </div>

            <div class="form-group">
                <label class="card-title s3">Fee*</label><br>
                <input class="from-control s4" type="text" name="fee"  placeholder="fee">
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
<table id="dtBasicExample" class="table table-striped table-bordered">
    <thead>

    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Course</th>
        <th>fee</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ( $students as $student )

    <tr>

        <td>{{ $student->id}}</td>
        <td>{{ $student->studname}}</td>
        <td>{{ $student->course}}</td>
        <td>{{ $student->fee}}</td>
        <td>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST">

            {{-- <a class="btn btn-info" href="{{ route('students.show',$student->id )}}">Show</a> --}}
            <a class="btn btn-success" href="{{ route('students.edit',$student->id) }}" >
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





