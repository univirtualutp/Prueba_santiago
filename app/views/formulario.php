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
		<form role="form">
  <div class="form-group">
    <label for="email">Dirección de E-mail</label>
    <input type="email" class="form-control" id="email" placeholder="Introduce tu E-mail">
  </div>
  <div class="form-group">
    <label for="role">Tipo de Usuario</label>
    <select name="role" id="role" class="form-control">
      <option>Usuario</option>
      <option>Admin</option>
    </select>
  </div>
  <!-- Mas campos aqui… -->
</form>

<h2>aqui otro form</h2>
{{ Form::open(array('method' => 'POST'), array('role' => 'form')) }}

  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('email', 'Dirección de E-mail') }}
      {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('full_name', 'Nombre completo') }}
      {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('password', 'Contraseña') }}
      {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
    </div>
  </div>
  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
  
{{ Form::close() }}

	</div>
</body>
</html>
