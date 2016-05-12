<!DOCTYPE html>
<html lang="es">
<head>
  
  <?php 
    $titulos = [
    'index' => 'suWWWeb: Páginas web para empresas',
    'paginas-web' => 'suWWWeb: Páginas web',
    'plan-personal' => 'suWWWeb: Páginas web > Plan personal',
    'plan-empresarial' => 'suWWWeb: Páginas web > Plan empresarial',
    'tienda-online' => 'suWWWeb: Páginas web > Tienda online',
    'imagen-corporativa' => 'suWWWeb: Imagen corporativa',

    ];

    $uri = end(explode("/", $_SERVER['PHP_SELF']));
   ?>


   <?php 
    $descripcion = [
    'index' => 'Páginas web en Bogotá, con los planes más económicos y accesibles del mercado, con más de 10 años de experiencia',
    'paginas-web' => 'Páginas web en Bogotá, con los planes más económicos y accesibles del mercado, con más de 10 años de experiencia',
    'plan-personal' => 'Páginas web en Bogotá, con los planes más económicos y accesibles del mercado, con más de 10 años de experiencia',
    'plan-empresarial' => 'Páginas web en Bogotá, con los planes más económicos y accesibles del mercado, con más de 10 años de experiencia',
    'tienda-online' => 'Páginas web en Bogotá, con los planes más económicos y accesibles del mercado, con más de 10 años de experiencia',
    'imagen-corporativa' => 'Páginas web en Bogotá, con los planes más económicos y accesibles del mercado, con más de 10 años de experiencia',

    ];

    $uri = end(explode("/", $_SERVER['PHP_SELF']));
   ?>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php echo $titulos[$uri]; ?></title>
  <meta name="description" content="<?php echo $descripcion[$uri]; ?>">
  <meta name="author" content="suWWWeb">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="assets/css/all-css.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

 
  <!-- Mapa de Calor -->
  <script type="text/javascript">
    (function() {
    var hm = document.createElement('script'); hm.type ='text/javascript'; hm.async = true;
    hm.src = ('++u-heatmap-it+log-js').replace(/[+]/g,'/').replace(/-/g,'.');
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hm, s);
    })();
  </script>
</head>
<body>

  <header>
    <div class="container">
      <div class="three columns logo">
        <a  href="/"><img class="twelve columns" src="assets/images/logo.png" alt=""></a>
      </div>
      
      <nav class="nine columns menu__header"> 
        <ul>
          <li><a href="/">INICIO</a></li>
          <li><a href="paginas-web">PÁGINAS WEB</a></li>
          <li><a href="posicionamiento-google-adwords">POSICIONAMIENTO</a></li>
          <li><a href="imagen-corporativa">IMAGEN CORPORATIVA</a></li>
          <li><a href="">PROYECTOS</a></li>
          <li><a class="fancybox fancybox.iframe" href="contacto">CONTACTENOS</a></li>
          <li><a class="fancybox fancybox.iframe" href="contacto"><img width="32px" src="assets/images/icons/icon-contact-white.png" alt=""></a></li>
        </ul>
      </nav>

    </div>
  </header>
  
