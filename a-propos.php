<?php
// la variable est definie dans part/head et défini le titre
 $pageTitle ='Save our communty - A propos' ?>

<!DOCTYPE HTML>
<html lang="fr">

<?php include ('part/head.php') ?>

<!-- jQuery (necessary for JavaScript plugins) -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/migrate.js"></script>

<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="assets/js/light-box/magnific-popup.css"> 

<!-- Magnific Popup core JS file -->
<script src="assets/js/light-box/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.lightbox').magnificPopup({disableOn: 700, type: 'iframe', mainClass: 'mfp-fade', removalDelay: 160, preloader: false, fixedContentPos: false});
    });
</script>

</head>

<body>
<div class="wrapper"> 
  <!-- Header -->
  <header>

      <?php 
    include('part/header-2.php');

   ?>

  </header>
  
  <!-- Header Bottom -->
  <section class="header-bottom">
    <article>
      <div class="container"><h1>A propos de la plateforme<span></span></h1></div>
    </article>
  </section>
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-6">
          <!-- <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index.html">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li>About Us</li>
          </ul> -->
        </div>
        <div class="col-lg-6 align-right sub-menu">
          <ul>
            <li><a href="#who-we-are">La plateforme</a></li>
            <li><a href="#our-skills">Nos domaines</a></li>
            <li><a href="#our-team">Notre équipe</a></li>
            <li><a href="#how-it-works">Comment ça marche</a></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  
  <!-- Page Content -->
  <section class="white" id="who-we-are">
    <article class="container about-section">
      <h3>Save our community</h3>
      <a href="https://player.vimeo.com/video/136277304?title=0&amp;byline=0&amp;portrait=0" class="video-container lightbox icon-play"><img src="assets/images/video2.jpg" alt="Video" /></a>
      <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum. Sed iaculis magna mi, sed semper ex semper eu.Etiam sagittis ante eget nisi tempus, elementum sollicitudin nulla lacinia Aenean sed odio ipsum. Nam tincidunt bibendum quam, sed ultricies nisl tristique eget.</p>
      <p>Maecenas facilisis sollicitudin magna at fringilla. Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum. Sed iaculis magna mi, sed semper ex semper eu. Vestibulum auctor mi sed.</p>
      <a href="subscribe.php" class="btn btn-3 green">Devenir membre</a>
      <a href="#" class="btn btn-3 green">Devenir partenaire</a>
    </article>
  </section>
  
  <section class="gray skills" id="our-skills">
    <article class="container">
      <h3>Nos domaines</h3>
      <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum. Sed semper ex semper eu. <br /> Etiam sagittis ante eget nisi tempus, elementum sollicitudin nulla lacinia Aenean sed odio ipsum.</p>
      
      <div class="row">
        <div class="col-lg-3">
          <div class="pie_progress" role="progressbar" data-goal="90" data-barcolor="#34cc99" data-barsize="4" data-size="149">
            <div class="pie_progress__number">0%</div>
            <div class="pie_progress__label">Communauté</div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pie_progress" role="progressbar" data-goal="85" data-barcolor="#f2d031" data-barsize="4" data-size="149">
            <div class="pie_progress__number">0%</div>
            <div class="pie_progress__label">Innovation</div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#3298c9" data-barsize="4" data-size="149">
            <div class="pie_progress__number">0%</div>
            <div class="pie_progress__label">Gestion de projet</div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pie_progress" role="progressbar" data-goal="100" data-barcolor="#ef6342" data-barsize="4" data-size="149">
            <div class="pie_progress__number">0%</div>
            <div class="pie_progress__label">Graphic Desiging</div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section class="parallax facts-figures">
    <article class="container">
      <ul>
        <li><span data-count="0">0</span>Projets financés</li>
        <li><span data-count="0">0</span>Donateurs</li>
        <li><span data-count="0">0</span>Soumissionaires</li>
        <li><span data-count="0">0</span>Montant collecté</li>
      </ul>
    </article>
  </section>
  
  <section class="white team" id="our-team">
    <article class="container">
      <h3>Notre équipe</h3>
      <div class="row">
        <div class="col-lg-3">
          <div class="team-item">
            <figure class="team-image">
              <figcaption></figcaption>
              <img src="assets/images/team_1.jpg" alt="img" />
            </figure>
            <div class="team-content">
              <h5><a href="#">KPOHIZOUN DESMOND<span class="line-green"></span> <span>CEO</span></a></h5>
            </div>
            <div class="team-social">
              <ul>
                <li class="fb"><a href="#" class="transition-all"><i class="fa fa-facebook"></i></a></li>
                <li class="tw"><a href="#" class="transition-all"><i class="fa fa-twitter"></i></a></li>
                <li class="yt"><a href="#" class="transition-all"><i class="fa fa-youtube"></i></a></li>
                <li class="ln"><a href="#" class="transition-all"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="team-item">
            <figure class="team-image">
              <figcaption></figcaption>
              <img src="assets/images/team_2.jpg" alt="img" />
            </figure>
            <div class="team-content">
              <h5><a href="#">SABI SADECK<span class="line-yellow"></span> <span>Director</span></a></h5>
            </div>
            <div class="team-social">
              <ul>
                <li class="fb"><a href="#" class="transition-all"><i class="fa fa-facebook"></i></a></li>
                <li class="tw"><a href="#" class="transition-all"><i class="fa fa-twitter"></i></a></li>
                <li class="yt"><a href="#" class="transition-all"><i class="fa fa-youtube"></i></a></li>
                <li class="ln"><a href="#" class="transition-all"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="team-item">
            <figure class="team-image">
              <figcaption></figcaption>
              <img src="assets/images/team_3.jpg" alt="img" />
            </figure>
            <div class="team-content">
              <h5><a href="#">GBEDOLO GEORGES<span class="line-blue"></span> <span>Designer</span></a></h5>
            </div>
            <div class="team-social">
              <ul>
                <li class="fb"><a href="#" class="transition-all"><i class="fa fa-facebook"></i></a></li>
                <li class="tw"><a href="#" class="transition-all"><i class="fa fa-twitter"></i></a></li>
                <li class="yt"><a href="#" class="transition-all"><i class="fa fa-youtube"></i></a></li>
                <li class="ln"><a href="#" class="transition-all"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="team-item">
            <figure class="team-image">
              <figcaption></figcaption>
              <img src="assets/images/team_4.jpg" alt="img" />
            </figure>
            <div class="team-content">
              <h5><a href="#">WOROU ISAAC<span class="line-red"></span> <span>Developer</span></a></h5>
            </div>
            <div class="team-social">
              <ul>
                <li class="fb"><a href="#" class="transition-all"><i class="fa fa-facebook"></i></a></li>
                <li class="tw"><a href="#" class="transition-all"><i class="fa fa-twitter"></i></a></li>
                <li class="yt"><a href="#" class="transition-all"><i class="fa fa-youtube"></i></a></li>
                <li class="ln"><a href="#" class="transition-all"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>
  
  <!-- <section class="gray" id="how-it-works">
    <article class="container" id="intor-section">
      <h3>How It Works ?</h3>
      <ul>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-ideas"></i></span>
          <strong>Send Your Ideas <span class="line-green"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-community2"></i></span>
          <strong>Share With Community <span class="line-yellow"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-publicpower"></i></span>
          <strong>Collect Funds <span class="line-red"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
      </ul>
    </article>
  </section>
   -->
  <section class="send-us">
    <article class="container">
      <h3>Have a Community Project in Need of Funding?</h3>
      <a href="start.html" class="btn btn-3 green">Send to us</a>
    </article>
  </section>
  
      <?php include('part/footer.php'); ?>
  </div>


</body>
</html>