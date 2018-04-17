@extends('../layouts.frontend')

@section('title', 'Parámetros')

@section('content')
    <h1>Parámetros</h1>
    <ul>
    	<li>Parámetro 1 = {{$id1}}</li>
    	<li>Parámetro 2 = {{$id2}}</li>
    	<li>The current UNIX timestamp is @{{ time() }}.</li>
    </ul>
    
@endsection