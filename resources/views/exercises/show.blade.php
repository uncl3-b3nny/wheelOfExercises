<!-- <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>{{  $exercise->name }}</h1>
    <div>{{ $exercise->description }}</div>
    <div>{{ $exercise->number_of_reps }}</div>
</body>
</html> -->
@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show exercise</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('exercises.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $exercise->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriptions:</strong>
                {{ $exercise->description }}
            </div>
        </div>
<!--         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number of reps:</strong>
                {{ $exercise->number_of_reps }}
            </div>
        </div> -->
    </div>
@endsection