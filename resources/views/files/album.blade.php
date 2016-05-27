@extends('layouts.master')
@section('content')
<h2> Upload Album </h2>



<ul>

    @foreach($albums as $album)
    <li> {{ $album->albumName }} {{ link_to_route('deleteAlbum', 'Delete', [$album->id]) }} </li>



    @endforeach


</ul>


{!! Form::open(array('url' => '/handlealbumUpload',))  !!}
{!! Form::label('Album name:')!!}

{!! Form::text('albumName') !!}
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

   

   
   {!! Form::token()    !!}
   {!! Form::submit('Upload ')     !!}
   {!! Form::close()    !!}



@endsection
