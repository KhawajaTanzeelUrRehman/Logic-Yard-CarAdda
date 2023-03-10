@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index')}}"> Back</a>
        </div>
    </div>
</div>
    
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

<form action="{{ route('students.update',$student->id) }}"  method="post">
@csrf

@method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="from-group">
            <strong>StudName</strong>
            <input type="text" name="studname" value="{{ $student->studname }}" class="form-control" placeholder="Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="from-group">
            <strong>Course</strong>
            <input type="text" name="course" value="{{ $student->course }}" class="form-control" placeholder="course">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="from-group">
            <strong>fee</strong>
            <input type="text" name="fee" value="{{ $student->fee }}" class="form-control" placeholder="fee ">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit">Submit</button>
    </div>
</div>
</form>

@endsection
