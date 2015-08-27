<!DOCTYPE HTML>
<html>
  <head>
    <title>Tarea desarollo web</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
     <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>" />
  </head>
  <body>
      <header id="header">
        <h1>Tarea 1 Desarrollo Web</h1>
      <p>Ingrese su nombre de usuario y contraseña para conocer los beneficios de este framework.</p>
    <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Usuario:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Constraseña:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Ingresar"/>
   </form>
  </body>
</html>