@extends('layouts.master')
@section('content')
<h2> Upload Playlist </h2>

<ul>

    @foreach($playlists as $playlist)
    <li> {{ $playlist->playlistName }}  {{ link_to_route('deletePlaylist', 'Delete', [$playlist->id]) }} </li>



    @endforeach


</ul>





{!! Form::open(array('url' => '/handleplaylistUpload'))  !!}
{!! Form::label('Playlist name:')!!}

{!! Form::text('playlistName') !!}
<br/>




   

   
   {!! Form::token()    !!}
   {!! Form::submit('Upload')     !!}
   {!! Form::close()    !!}



@endsection
