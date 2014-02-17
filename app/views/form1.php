<h1>formulario de reporte</h1>
<?php
echo Form::open(array('url' => 'foo/bar', 'files' => true));
echo Form::token();
echo "nombre";
echo Form::text('nombre');
echo "apellidos";
echo Form::text('apellidos');
echo "Correo";
echo Form::label('email', 'E-Mail Address');
echo "asunto";
echo Form::text('asunto');
echo "descripcion";
echo Form::textarea('descripcion');
echo "archivo de referencia";
echo Form::file('image');
echo Form::submit('enviar!');
?>