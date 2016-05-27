@extends('layouts.master')
@section('content')
<h2> Select Playlist </h2>







{!! Form::open(array('url' => '/handleUploadPlaylistSong'))  !!}
{!! Form::label('Playlist name:')!!}

<select name="playlistName">
<?php
    foreach ($playlists as $playlist) {
?>
    <option value="<?php echo $playlist['playlistName'] ?>"> <?php echo $playlist['playlistName'] ?> </option>
<?php
    }
?>

</select>

   <br/>
   {!! Form::token()    !!}
    {!! Form::submit('Go')     !!}
  
   {!! Form::close()    !!}



@endsection
