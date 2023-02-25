@extends('frontend.layouts.header')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('carbodies.index')}}"> Back</a>
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

<form action="{{ route('carbodies.update',$carbodies->id) }}"  method="post">
@csrf

@method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="from-group">
            <strong>Name</strong>
            <input type="text" name="name" value="{{ $carbodies->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="from-group">
            <strong>Course</strong>
            <input type="text" name="course" value="{{ $carbodies->slug }}" class="form-control" placeholder="slug">
        </div>
    </div>
   

    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit">Submit</button>
    </div>
</div>
</form>

@endsection
