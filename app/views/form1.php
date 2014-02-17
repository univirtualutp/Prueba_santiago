<h1>formulario de reporte</h1>
<?php
echo Form::open(array('url' => 'foo/bar', 'files' => true));
echo Form::token();
echo Form::text('nombre');
echo Form::text('apellidos');
echo Form::label('email', 'E-Mail Address');
echo Form::text('asunto');
echo Form::text('descripcion');
echo Form::file('image');
echo Form::submit('enviar!');
?>