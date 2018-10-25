<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	
</head>
<body>
<h1> Calculadora de {{$nombre}} </h1>
<form action="/calculadora/resultado">
	<input type="text" name="nombre" value='{{$nombre}}' hidden>
	Numero 1:
	<input type="number" name="numero1" value="{{isset($number1)?$number1:0}}">
	<br>
	Numero 2:
	<input type="number" name="numero2" value="{{isset($number2)?$number2:0}}">
	<br>
	<input type="submit" name="calcular" value="suma">
	<input type="submit" name="calcular" value="resta">
	<input type="submit" name="calcular" value="multi">
	<input type="submit" name="calcular" value="divi">
	<input type="submit" name="calcular" value="elevado">
	<button type="button" name="calcular" value="elevado" class="btn btn-primary">Primary</button>
</form>

@if(isset($resultado))
	<h1> {{$resultado}} </h1>
@endif
@if(isset($error))
	<h1> {{$error}} </h1>
@endif
<script src="{{url ('assets/js/components/bootstrap.js')}}"></script>
</body>
</html>