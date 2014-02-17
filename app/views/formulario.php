<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reporte de errores Univirtual</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
	 	<h1>querido developer, reporta tu error aqu&iacute;</h1>
<?php
echo Form::open(array('url' => '/contact', 'files' => true));
echo Form::token();
echo "<p>";
echo Form::label('nombre');
echo Form::text('nombre');
echo "<p>";
echo Form::label('apellidos');
echo Form::text('apellidos');
echo "<p>";
echo Form::label('email');
echo Form::email('email');
echo "<p>";
echo Form::label('asunto');
echo Form::text('asunto');
echo "<p>";
echo Form::label('descripcion');
echo Form::textarea('descripcion');
echo "<p>";
echo Form::label('archivo de referencia');
echo Form::file('image');
echo "<p>";
echo Form::submit('enviar!');
?>
	</div>
</body>
</html>
