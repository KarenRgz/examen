@extends('layout')
@section('title','Arbol genealogico')
@section('sidebar')

<h1>Abuelos</h1>
@foreach ($abuelos as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach

<h2>Madre</h2>
@foreach ($padres as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach

<h3>Hermanas</h3>
@foreach ($hermanas as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
@endsection