@extends('layouts.app')
@section('content')
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>balsal</title>
</head>
<body>

Song name:{{$filepath->filename}}
<br/>
Artist name:{{$filepath->artistName}}
<br/>
Album name:{{$filepath->albumName}}
<br/>
Genre: {{$filepath->genre}}
<br/>
<audio controls>
  
  <source src= "app/uploads/{{$filepath->albumName}}/{{$filepath->filename}}" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

</body>
</html>

@endsection
