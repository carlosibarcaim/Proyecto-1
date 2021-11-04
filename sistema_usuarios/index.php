<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>index</title>
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
                        
                    <ul class = "sidenav" id = "nav-movil" data-target="nav-movil">
                        <li><a href="#"> <i class = "material-icons right">local_offer</i>Articulos</a></li>
                        <li><a href="register.php" class = "waves-effect waves-light btn blue-grey"><i class = "material-icons right">account_circle</i>Registro</a></li>
                    </ul>            
    </header">

    <!-- HERO -->

    <section class = "section_hero">
        <div class = "hero">
            <div class = "container">
                <div class = "container-hero">
                    <h2 class = "title-hero">
                        <br>Bienvenido al sistema de usuarios.
                    </h2>
                    <p>
                        No estas registrado aún, que esperas para ingresar y disfutar de los beneficios.
                    </p>
                </div>
                
                    <div class = "boton">
                        <a href="register.php" class = "waves-effect waves-light btn blue-grey">
                            <i class="material-icons right">account_circle</i>Registro
                        </a>
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