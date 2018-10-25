<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
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

</form>

@if(isset($resultado))
	<h1> {{$resultado}} </h1>
@endif
@if(isset($error))
	<h1> {{$error}} </h1>
@endif

</body>
</html>