<?php
session_start();

//unset($_SESSION['success']);
if (isset( $_SESSION['user']))
{
  //echo( $_SESSION['user']);
}



// la variable est definie dans part/head et défini le titre
 $pageTitle ='Save our communty - Plateforme de financement participatif';

 // importer la class de connexion à la base de données

 require("class/connect/Db.class.php");
 
 
 ?>



<!DOCTYPE HTML>
<html lang="fr">
<head>
  <?php include ('part/head.php') ?>
</head>

<body>
<div class="wrapper"> 
  <!-- Header -->
  <?php 
    include('part/header.php');

   ?>

  <!-- Header end-->
  
  <!-- Revolution Slider -->
  <section class="main-slider">
    <article>
      <div class="tp-banner-container">
        <div class="tp-banner" >
          <ul>
            <!-- SLIDE 1 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="PARK AT BIRDCAGE WALK">
              <!-- MAIN IMAGE -->
              <img src="assets/images/dummy.png"  alt="slidebg1" data-lazyload="assets/images/slide-1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
            
              <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0"
                data-x="503"
                data-y="160" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">PARK AT
              </div>
            
              <div class="tp-caption style_h_1 skewfromrightshort tp-resizeme rs-parallaxlevel-0"
                data-x="390"
                data-y="221" 
                data-speed="500"
                data-start="2250"
                data-easing="Power3.easeInOut"
                data-splitin="chars"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">BIRDCAGE WALK
              </div>
            
              <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="140"
                data-y="300" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div style="text-align:center;">Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum. Sed iaculis magna mi, sed semper<br />ex semper eu. Etiam sagittis ante eget nisi tempus, elementum sollicitudin nulla lacinia. Aenean sed odio ipsum. Nam tincidunt bibendum quam, <br />sed ultricies nisl tristique eget. Vestibulum auctor mi sed sapien hendrerit, et auctor nulla egestas. Maecenas facilisis sollicitudin magna at fringilla.</div>
                </div>
                
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 slider-progress-section"
                data-x="109"
                data-y="395" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2900"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div class="progress-section">
                    <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#32cc98" data-barsize="9.1" data-size="148" style="width:148px; margin:0px 106px; float: left;">
                      <div class="pie_progress__number">0%</div>
                      <div class="pie_progress__label">Completed</div>
                    </div>
                    <ul>
                      <li>12<span>Days Left</span></li>
                      <li>175<span>Backers</span></li>
                      <li class="last">R$7.000,00<span>Funded</span></li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                </div>
                
                <div class="tp-caption lft customout rs-parallaxlevel-0"
			    data-x="108"
			    data-y="395" 
			    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			    data-speed="700"
			    data-start="2900"
			    data-easing="Power3.easeInOut"
			    data-elementdelay="0.1"
			    data-endelementdelay="0.1"
			    style="z-index: 6;"><img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/funder_3.jpg"  class="funder-img"> </div>
            </li>
          
            <!-- SLIDE 2 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="PARK AT BIRDCAGE WALK">
              <!-- MAIN IMAGE -->
              <img src="assets/images/dummy.png"  alt="slidebg1" data-lazyload="assets/images/slide-2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
            
              <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0"
                data-x="545"
                data-y="160" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">SAVE
              </div>
            
              <div class="tp-caption style_h_1 skewfromrightshort tp-resizeme rs-parallaxlevel-0"
                data-x="460"
                data-y="221" 
                data-speed="500"
                data-start="2250"
                data-easing="Power3.easeInOut"
                data-splitin="chars"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">THE NATURE
              </div>
            
              <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="140"
                data-y="300" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div style="text-align:center;">Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum. Sed iaculis magna mi, sed semper<br />ex semper eu. Etiam sagittis ante eget nisi tempus, elementum sollicitudin nulla lacinia. Aenean sed odio ipsum. Nam tincidunt bibendum quam, <br />sed ultricies nisl tristique eget. Vestibulum auctor mi sed sapien hendrerit, et auctor nulla egestas. Maecenas facilisis sollicitudin magna at fringilla.</div>
                </div>
                                          
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 slider-progress-section"
                data-x="109"
                data-y="395" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2900"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div class="progress-section">
                    <div class="pie_progress" role="progressbar" data-goal="80" data-barcolor="#f2d031" data-barsize="9.1" data-size="148" style="width:148px; margin:0px 106px; float: left;">
                      <div class="pie_progress__number">0%</div>
                      <div class="pie_progress__label">Completed</div>
                    </div>
                    <ul>
                      <li>12<span>Days Left</span></li>
                      <li>175<span>Backers</span></li>
                      <li class="last">R$7.000,00<span>Funded</span></li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                </div>
                
                <div class="tp-caption lft customout rs-parallaxlevel-0"
			    data-x="108"
			    data-y="395" 
			    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			    data-speed="700"
			    data-start="2900"
			    data-easing="Power3.easeInOut"
			    data-elementdelay="0.1"
			    data-endelementdelay="0.1"
			    style="z-index: 6;"><img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/funder_1.jpg"  class="funder-img"> </div>
            </li>
            
            <!-- SLIDE 3 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="PARK AT BIRDCAGE WALK">
              <!-- MAIN IMAGE -->
              <img src="assets/images/dummy.png"  alt="slidebg1" data-lazyload="assets/images/slide-4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
            
              <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0"
                data-x="503"
                data-y="160" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">FOOD
              </div>
            
              <div class="tp-caption style_h_1 skewfromrightshort tp-resizeme rs-parallaxlevel-0"
                data-x="390"
                data-y="221" 
                data-speed="500"
                data-start="2250"
                data-easing="Power3.easeInOut"
                data-splitin="chars"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">FOR HOMELESS
              </div>
            
              <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="140"
                data-y="300" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div style="text-align:center;">Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum. Sed iaculis magna mi, sed semper<br />ex semper eu. Etiam sagittis ante eget nisi tempus, elementum sollicitudin nulla lacinia. Aenean sed odio ipsum. Nam tincidunt bibendum quam, <br />sed ultricies nisl tristique eget. Vestibulum auctor mi sed sapien hendrerit, et auctor nulla egestas. Maecenas facilisis sollicitudin magna at fringilla.</div>
                </div>
                
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 slider-progress-section"
                data-x="109"
                data-y="395" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2900"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div class="progress-section"> <!--<img src="assets/images/funder_3.jpg" alt="Funder" class="funder-img" />-->
                    <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#ef6342" data-barsize="9.1" data-size="148" style="width:148px; margin:0px 106px; float: left;">
                      <div class="pie_progress__number">0%</div>
                      <div class="pie_progress__label">Completed</div>
                    </div>
                    <ul>
                      <li>12<span>Days Left</span></li>
                      <li>175<span>Backers</span></li>
                      <li class="last">R$7.000,00<span>Funded</span></li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                </div>
                
                <div class="tp-caption lft customout rs-parallaxlevel-0"
			    data-x="108"
			    data-y="395" 
			    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			    data-speed="700"
			    data-start="2900"
			    data-easing="Power3.easeInOut"
			    data-elementdelay="0.1"
			    data-endelementdelay="0.1"
			    style="z-index: 6;"><img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/funder_4.jpg"  class="funder-img"> </div>
            </li>
        
          </ul>
          <div class="tp-bannertimer"></div>
        </div>
      </div>
    </article>
  </section>
  
  <!-- Page Content -->
  <section class="white">
    <article class="container" id="intor-section">
      <h3>Bienvenu sur SAVE OUR COMMUNITY <br /> 1er site Aficain de promotion et de financement des oeuvres communautaires</h3>
      <ul>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-ideas"></i></span>
          <strong>Vous avez une idée, une innovation ?<span class="line-green"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-community2"></i></span>
          <strong>Voulez-vous résoudre un problème de votre communauté ?<span class="line-yellow"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-publicpower"></i></span>
          <strong>Toute la communauté vous soutien ici<span class="line-red"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
      </ul>
    </article>
  </section>
  
  <section class="gray">
    <article class="container main" id="popular">
      <h3>Projets du moment</h3>
      <div class="row">
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php">Consulter</a></figcaption>
              
              <img src="assets/images/popular_1.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Help us to save the nature  <span class="line-green"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_1.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#34cc99" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php">Consulter</a></figcaption>
              <img src="assets/images/popular_2.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Charity hospital <span class="line-yellow"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_2.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#f2d031" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
             <div class="popular-details">
                <ul>
                 <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php">Consulter</a></figcaption>
              <img src="assets/images/popular_3.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">We Can Build Our Church <span class="line-blue"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_3.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#3298c9" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php">Consulter</a></figcaption>
              <img src="assets/images/popular_4.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Flood affected people <span class="line-red"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_4.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#ef6342" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="popular-btn green"> <a href="projects.php">Plus de projets</a> </div>
    </article>
  </section>
  
  <section class="parallax events singal">
    <article class="container">
      <h3>Evénements à venir</h3>
      <div class="row upcoming-events">
        <div class="col-lg-4">
          <div class="green">
            <h4>Fundraising Seminar <span></span></h4>
            <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum.</p>
            <span class="time-countdown" data-year="2016" data-month="3" data-day="17"></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="yellow">
            <h4>Fundraising Seminar <span></span></h4>
            <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum.</p>
            <span class="time-countdown" data-year="2016" data-month="7" data-day="17"></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="red">
            <h4>Fundraising Seminar <span></span></h4>
            <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum.</p>
            <span class="time-countdown" data-year="2016" data-month="5" data-day="17"></span>
          </div>
        </div>
      </div>
    </article>
  </section>
  
  <section class="white">
    <article class="container" id="ourbakers">
      <h3>Nos partenaires</h3>
      <div class="logo-carousels">
        <div class="slide"><img src="assets/images/backers/1.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/2.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/3.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/4.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/5.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/6.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/7.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/8.png" alt="Our Backers"></div>
      </div>
    </article>
  </section>
  
  <section class="map-container">
    <div id="map-desc"><h3>Plusieurs projets réussi.</h3></div>
    <div id="projects-map"></div>
  </section>
  
  <section class="send-us">
    <article class="container">
      <h3>Avez-vous un projet communautaire ou simplement innovant ?</h3>
      <a href="start.php" class="btn btn-3 green">Soumettez le nous ...</a>
    </article>
  </section>
  <!-- Footer -->

  <?php 
  include('part/footer.php')


   ?>
  <!-- Footer -->
  
</div>

  
<script>
  /*  var myForm = document.getElementById('signform');
  
    myForm.addEventListener('submit', function(e) {
      //  alert('Vous avez envoyé le formulaire !\n\nMais celui-ci a été bloqué pour que vous ne changiez pas de page.');
        e.preventDefault();

        var email = $('#email').val();
      var password = sha1(encodeURIComponent($('#password').val()));
      $.post("actions/login.php",{email:email,password:password,submit:$('#submit').val()},
        function(data)
        {
          if (data.toString().trim()!="success")
          {
            $('#htag').html(data);
            $('#htag').fadeIn(1000);
            //alert(data);
          } 
          else              
          {
           window.location.reload(true);

          }
      });
    

    });  */
  
</script>


</body>
</html>


