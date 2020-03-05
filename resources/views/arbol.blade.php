@extends('layout')

@section('title', 'Hobbies')

@section('sidebar')
	<h1>Home</h1>
	<p>Arbol genealogico</p>
	<ul>
		@foreach($arbolg as $key)
		<li> {{$key ['nombre']}} </li>
		@endforeach
	</ul>
	<h1>Hasta luego</h1>
@endsection