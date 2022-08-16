<!DOCTYPE html>
<html lang="es">
    <head>
        <title>La Chapa Daireaux</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
      
    <body>

        <div class="Contenedor">

            <!-- Contenedor de la barra de navegación -->
            <header class="header">
                <nav class="nav">
                <a href="index.php" class="logo nav-link"><img Id="Logo" src="img/logo.jpg" alt="logo"></a>
                <button class="nav-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-menu">
                    <li class="nav-menu-item">
                    <a href="https://www.instagram.com/lachapa.dx/" target="_blank" class="nav-menu-link nav-link">Nosotros</a>
                    </li>
                    <li class="nav-menu-item">
                    <a href="Login.php" class="nav-menu-link nav-link nav-menu-link_active">Login</a>
                    </li>
                </ul>
                </nav>
            </header>
            <!-- Fin contenedor de la barra de navegación -->
            
            <video source src="img/videoFondo.mp4" type="video/mp4" autoplay muted loop></video>

            
            
            <div class="login">
		        <div class="login-screen">
                    <div class="app-title">
                        <h1>Login</h1>
                    </div>

                    <?php
                    include"Controladores/ControladorLogin.php";
                    ?>

			        <form method="post" class="login-form">
                        <div class="control-group">
                            <input name="Usuario" type="text" class="login-field" placeholder="Nombre de usuario" id="login-name">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>

                        <div class="control-group">
                            <input name="Contraseña" type="password" class="login-field" placeholder="Contraseña" id="login-pass">
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>

                        <input class="btn btn-primary btn-large btn-block" type="submit" name="IniciarSesion" value="Iniciar sesión"></input>
                        <a class="login-link" type="submit">¿No tenes cuenta? Create una</a>
                    </form>
                </div>
            </div>












<?php require ('layout/footer.php') ?>
