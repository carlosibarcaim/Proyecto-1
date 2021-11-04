<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>register</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.5">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="">
 
  <!-- <link rel="icon" href="images/logo.png"> -->
 
  <meta name="title" content="USERS">
  <meta name="description" content="Administración de Negocios">
  <meta name="keyword" content="users, perfil, web">
 
  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
 
  <script src="js/materialize.min.js"></script>
 
  <title>PHP</title>
</head>
<body>
        <!-- HEADER -->
    <header class = "navbar-fixed">
        <nav class="blue-grey lighten-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo left">
                        <img src="imagenes\Etiquetrance.png" width = "60">
                    </a>
                    <a href="#" data-target="nav-movil" class="sidenav-trigger right"><i class="material-icons">menu</i>
                    </a>
                        <!-- PC -->    
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#">
                            <i class="material-icons right">local_offer</i>Articulos</a></li>
                            <li><a href="#" class = "waves-effect waves-light btn blue-grey">
                            <i class="material-icons right">account_circle</i>Registro</a></li>
                        </ul>
                </div>
            </div>
        </nav>
                        <!-- Movil -->           
                        
                    <ul class = "sidenav" id = "nav-movil">
                        <li><a href="#"> <i class = "material-icons right">local_offer</i>Articulos</a></li>
                        <li><a href="#" class = "waves-effect waves-light btn blue-grey"><i class = "material-icons right">account_circle</i>Registro</a></li>
                    </ul>
    </header">

    <!-- HERO -->

    <section class = "section_hero">
        <div class = "hero">
            <div class = "container">
                <div class = "container-form center">
                    <div class="card">
                        <form onsubmit="return false">
                            <div class = "row">
                                    <!-- USERNAME -->
                                <div class = "input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" id="rg_username" class="validate">
                                    <label for="icon_prefix">Usuario</label>
                                </div><!--Termina la columna-->
                                    <!-- EMAIL -->
                                <div class = "input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" id="rg_email" class="validate">
                                    <label for="icon_prefix">Correo electronico</label>
                                </div><!--Termina la columna-->
                                    <!-- CONTRASEÑA -->
                                <div class = "input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="icon_prefix" type="password" id="rg_pass1" class="validate">
                                    <label for="icon_prefix">Contraseña</label>
                                </div><!--Termina la columna-->
                                    <!-- CONFIRMAR CONTRASEÑA -->
                                <div class = "input-field col s12">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_prefix" type="password" id="rg_pass2" class="validate">
                                    <label for="icon_prefix">Confirmar contraseña</label>
                                </div><!--Termina la columna-->
                            </div><!--Termina row-->    
                        </form>
                    </div>
                </div>
                    <!-- Boton de registro -->
                <div class="btn_register">
                    <div class="col s12">
                        <div class = "center">
                            <input type="submit" class="waves-effect waves-light btn blue-grey" value="Registrar">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <footer class = "black">
        <div class = "container">
            <p class="copy">
                &copy; Todos los derechos reservados - sistema de usuarios.
            </p>
        </div>
    </footer>


    <div class="scrolltop scrolltop-dark"></div>
    
    <script src="js/app.js"></script>
</body>
</html>