<?php 
   $datos_json = file_get_contents('datos.json');
   $datos = json_decode($datos_json, true);

   $user = $datos['nombre'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/resources/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bienvenido a Jupiter</title>

    <style>

		h1 {
			text-align: center;
			margin-top: 50px;
			color: #fff;
		}
	

   

	</style>

</head>
<body class="body" >

<?php include_once('nav.php') ?>

    <h1>Bienvenido/a  <?php if(isset($user)){ echo $user; } ?> </h1>
	<div class="container">
		<p>¡Hola! Bienvenido/a a nuestro sitio web. Esperamos que encuentres lo que buscas y que tengas una experiencia agradable en nuestra página.</p>
		<p>No dudes en ponerte en contacto con nosotros si necesitas ayuda o si tienes alguna pregunta. Estamos aquí para ayudarte.</p>
  
	</div>

    
</body>
</html>