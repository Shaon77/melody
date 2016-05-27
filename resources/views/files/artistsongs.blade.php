@extends('layouts.master')
@section('content')
<h2> Songs </h2>




<ul>

    @foreach($songs as $song)
    <li> {{ $song->filename }} {{ link_to_route('artistplay', 'play', [$song->id]) }} </li>



    @endforeach


</ul>