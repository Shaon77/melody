@extends('layouts.master')
@section('content')
<h2> Albums </h2>




<ul>

    @foreach($albums as $album)
    <li> {{ $album->albumName }} {{ link_to_route('ShowPlaylistAlbumSongs', 'Expand', [$album->id,$playlistName]) }} </li>



    @endforeach


</ul>













@endsection