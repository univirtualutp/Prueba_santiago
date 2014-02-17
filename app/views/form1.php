<h1>formulario de reporte</h1>
<?php
echo Form::open(array('url' => 'foo/bar', 'files' => true));
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