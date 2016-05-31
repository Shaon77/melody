@extends('layouts.master')
@section('content')
<h2> Songs </h2>




<ul>

    @foreach($songs as $song)
    <li> {{ $song->filename }}  </li>



    @endforeach


</ul>