<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>profile</title>
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

    <!--=============
        PROFILE
    ============= -->

    <main role="main" class="user-profile">
        <div class="parallax-container profile">
            <div class="parallax">
                <img src="imagenes/hero.jpg">
            </div>
            <div class="content-parallx center">
                <figure>
                    <img src="imagenes/sasuke_gato.jpg" width="100" class="circle">
                </figure>
                <h2 class="name-user">
                    Carlos Ibar
                </h2>
            </div>
        </div><!-- End Parallax -->
        <div class="container">
            <article class="center">
                <h3>Sobre mi</h3>
                <figcaption>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium culpa eum deserunt itaque et eveniet, similique vero nemo eos, sapiente odio fugiat debitis esse quas cumque? Dolor, nulla expedita eaque nobis pariatur consectetur excepturi sapiente totam debitis voluptas rem numquam unde quibusdam deserunt quo, possimus recusandae commodi laudantium dicta cumque? Asperiores, aliquam libero cumque modi, voluptatem, officia laudantium voluptate provident ipsum repellendus ex alias quaerat est ut harum adipisci totam quisquam culpa amet qui atque corporis. Neque qui repellendus labore ad quisquam vel nulla, repellat adipisci sunt rerum tenetur voluptate alias possimus? Earum repudiandae deserunt nemo dicta eius dolorum dignissimos!
                </figcaption>
            </article>

            <div class="articles-post-user-profile">
                <div class="row">
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-image">
                                <img src="imagenes/hero_fondo.jpg">
                                <span class="card-title">Card Title
                                    <div class="card-action">
                                        <a href="#" class="white-text">Nuevo Articulo</a>
                                    </div>
                                </span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-image">
                                <img src="imagenes/hero_fondo.jpg">
                                <span class="card-title">Card Title
                                    <div class="card-action">
                                        <a href="#" class="white-text">Nuevo Articulo</a>
                                    </div>
                                </span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-image">
                                <img src="imagenes/hero_fondo.jpg">
                                <span class="card-title">Card Title
                                    <div class="card-action">
                                        <a href="#" class="white-text">Nuevo Articulo</a>
                                    </div>
                                </span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>|
                </div>
            </div>

        </div><!-- End Container -->
    </main>

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