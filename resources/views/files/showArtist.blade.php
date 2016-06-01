@extends('layouts.app')
@section('content')
<h2> Artists </h2>




<ul>

    @foreach($artists as $artist)
    <li> {{ $artist->artistName }}  {{ link_to_route('artistSongs', 'expand', [$artist->id]) }}</li>



    @endforeach


</ul>
@endsection