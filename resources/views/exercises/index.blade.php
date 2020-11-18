<!-- <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Wheel of exercises!</h1>

    <ul>
        @foreach ($exercises as $exercise)
            <a href="{{ $exercise->path() }}">{{ $exercise->name }}</a>
        @endforeach
    </ul>

</body>
</html>

 -->

@extends('layouts.app')
 
@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>The Wheel of Exercises!</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('exercises.create') }}"> Create a new exercise</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   <br>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($exercises as $exercise)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $exercise->name }}</td>
            <td>{{ $exercise->description }}</td>
            <td>
                <form action="{{ route('exercises.destroy',$exercise->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('exercises.show',$exercise->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('exercises.edit',$exercise->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $exercises->links() !!}
      
@endsection

<canvas id='canvas' width='880' height='300'>
    Canvas not supported, use another browser.
</canvas>
<script>
    let theWheel = new Winwheel();
</script>