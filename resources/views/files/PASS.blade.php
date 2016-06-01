@extends('layouts.master')
@section('content')
<h2> Songs </h2>




<ul>

    @foreach($songs as $song)
    <li> {{ $song->filename }} {{ link_to_route('addToPlaylist', 'add to palylist', $parameters=array($id=$song->id,$name=$playlistName)) }}  </li>



    @endforeach
    {{ $playlistName}}


</ul>