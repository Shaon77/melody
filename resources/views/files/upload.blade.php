@extends('layouts.master')
@section('content')
<h2> Upload Song </h2>


@if(count($errors))
 <ul>

     @foreach($errors->all() as $error)
         <li> {{ $error    }} </li>
     @endforeach
  </ul>
@endif

<ul>

    @foreach($files as $file)
    <li> {{ $file->filename }} {{ link_to_route('deleteFile', 'Delete', [$file->id]) }} {{ link_to_route('playCheck', 'play', [$file->id]) }}</li>



    @endforeach


</ul>

{!! Form::open(array('url' => '/handleUpload','files' => true))  !!}
{!! Form::label('Album name:')!!}

<select name="albumName">
<?php
    foreach ($albums as $album) {
?>
    <option value="<?php echo $album['albumName'] ?>"> <?php echo $album['albumName'] ?> </option>
<?php
    }
?>

</select>
<br/>

{!! Form::label('Artist name:')!!}

<select name="artistName">
<?php
    foreach ($artists as $artist) {
?>
    <option value="<?php echo $artist['artistName'] ?>"> <?php echo $artist['artistName'] ?> </option>
<?php
    }
?>

</select>
<br/>
{!! Form::label('genre') !!}
{!! Form::select('genre', array('Pop' => 'Pop', 'Rock' => 'Rock','Progressive Rock' => 'Progressive Rock',
    'Jazz' => 'Jazz', 'Country Pop' =>'Country Pop', 'Metal' =>'Metal' ))!!}

<br/>

   {!! Form::file('file')     !!}

   
   {!! Form::token()    !!}
   {!! Form::submit('Upload bla')     !!}
   {!! Form::close()    !!}



@endsection
