@extends('layout')

@section('title', 'Quien soy')

@section('sidebar')
<img src="{{asset ('/Bootstrap/images/perfil.jpg')}}" height="200" width="500">
@foreach ($name as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
@endsection

