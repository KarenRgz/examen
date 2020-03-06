@extends('layout')

@section('title', 'Inicio')

@section('sidebar')
<head>
	<title>Karen Rodriguez</title>
	<link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">
	<style type="text/css">
		html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
		ul {
    			list-style-type: none;
    			margin: 0;
    			padding: 0;
    			overflow: hidden;
    			background-color: #47D6ED;
			}

		li {
		    	float: left;
			}

		li a {
		    	display: block;
			    color: black;
			    text-align: center;
			    padding: 14px 60px;
			    text-decoration: none;
			    font-family: Avantgarde;
			}
		li a:hover {
			    background-color: #CEB6F0;
			}
			footer {
				text-align: center;
				padding: 500px;
			}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/index/">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/quiensoy/">¿Quién soy?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/arbol/">Mi árbol genealógico</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/hobbies/">Mis hobbies</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/experiencia/">Experiencia profesional</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/contactame/">Contactame</a>
      </li>
    </ul>
  </div>
</nav>
<h1>¡Hola, bienvenido! Mi nombre es Karen, estudio en la UIMQROO. Este es mi examen del primer parcial.</h1>
</body>
@endsection