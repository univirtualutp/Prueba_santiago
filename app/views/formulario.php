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
	</div>
</body>
</html>
