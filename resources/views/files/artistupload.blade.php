@extends('layouts.master')
@section('content')
<h2> Upload Artist </h2>

<ul>

    @foreach($artists as $artist)
    <li> {{ $artist->artistName }} {{ link_to_route('deleteArtist', 'Delete', [$artist->id]) }} </li>



    @endforeach


</ul>





{!! Form::open(array('url' => '/artisthandleUpload'))  !!}
{!! Form::label('Artist name:')!!}

{!! Form::text('artistName') !!}
<br/>

{!! Form::label('Country name:')!!}

{!! Form::text('countryName') !!}
<br/>


   

   
   {!! Form::token()    !!}
   {!! Form::submit('Upload')     !!}
   {!! Form::close()    !!}



@endsection
