<!doctype html>
<html>
<head>
      <title>Hacer vistas en Laravel es muy sencillo</title>
   </head>
   <body>
   @yield('content')
<?php 
echo $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
?>
   </body>
</html>