<!DOCTYPE HTML>
<html>
	<head>
		<title>Tarea 1 Desarrollo web</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		 <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
	</head>
	<body>
			<header id="header">
					
				<h1>Bienvenido <?php echo $username;?></h1>
				<h2>Codeigniter</h2>				
				<h3>Más simple</h3>
				<p>Brinda un conjunto de bibliotecas para tareas comunes, 
				junto con una interfaz simple y lógica entre sus archivos 
				para una rapida compresión. Por ejemplo variables
				 de sesión que si usáramos PHP puro deberían pasar de archivo en archivo. 
				</p>
				<h3>Mejor rendimiento</h3>
				<p>Al ser un framework basado en MCV posee un mejor rendimiento al separar la 
				lógica de la aplicación y su presentación.</p>
				<h3>Seguridad</h3>
				<p>Simples llamados a funciones de encriptación (e.g MD5) y llaves de seguridad .</p>
				<h3>Documentación y tutorial oficial</h3>
				<p><a href="http://www.codeigniter.com/docs">Codeigniter Documentation</a></p>
				<h3>Comunidad</h3>
				<p>Existe una gran comunidad de usuarios de codeigniter, desde foros específicos del framework hasta una gran cantidad de preguntas en páginas como Stack Overflow, lo que facilita considerablemente el desarrollo a la hora de encontrar la solución a errores.</p>		
			</header>
			<a type="submit"  href="home/logout">Logout</a>
	</body>
</html>

