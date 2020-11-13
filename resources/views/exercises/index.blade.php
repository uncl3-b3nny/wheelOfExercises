<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Wheel of exercises!</h1>

    <ul>
        @foreach ($exercises as $exercise)
            <li> {{$exercise->name}} </li>
        @endforeach
    </ul>
</body>
</html>