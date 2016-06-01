@extends('layouts.app')
@section('content')
<h2> Albums </h2>




<ul>

    @foreach($albums as $album)
    <li> {{ $album->albumName }}  {{ link_to_route('albumSongs', 'expand', [$album->id]) }}</li>



    @endforeach


</ul>
@endsection