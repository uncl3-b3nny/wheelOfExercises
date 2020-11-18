
@extends('layouts.app')

@section('content')
   <button onClick="theWheel.startAnimation();">Spin the Wheel!</button>

    <br>      
    <canvas id='canvas' width='880' height='420'>
        Canvas not supported, use another browser.
    </canvas>

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

<script>
    // @ToDo: 3
    // set the number of wheel segments to the number of exercises
    var exercises = {!! json_encode($exercises) !!}
    var number_of_segments = exercises.data.length

    // put the exercise names in an array
    var names = []
    exercises.data.forEach(element => names.push(element.name));

    // make an array of colors
    var colors = ['#ee1c24','#3cb878','#f6989d','#00aef0','#f26522','#e70697','#fff200','#f6989d','#ee1c24','#3cb878','#f26522','#a186be','#fff200','#00aef0','#ee1c24','#f6989d','#f26522','#3cb878','#000000','#a186be','#fff200','#00aef0','#ffffff'];

    // put them together in an array of objects so Winwheel can use it to paint & name the segments correctly
    var segments = []
    names.forEach(function(name, index){ segments.push({fillStyle:colors[index], text:name})});
</script>

<script>
    let theWheel = new Winwheel({
        'numSegments' : number_of_segments,
        'segments'    : segments,
        'outerRadius' : 170,
        'animation' :
        {
            'type'          : 'spinToStop',
            'duration'      : 10,
            'spins'         : 4,
            'callbackSound' : playSound,    // Specify function to call when sound is to be triggered
        }
    });
 
    let audio = new Audio('tick.mp3');  // Create audio object and load desired file.
 
    function playSound()
    {
        // Stop and rewind the sound (stops it if already playing).
        audio.pause();
        audio.currentTime = 0;
 
        // Play the sound.
        audio.play();
    }
</script>


@endsection

