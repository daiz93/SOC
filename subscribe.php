<?php
session_start();
// la variable est definie dans part/head et défini le titre
 $pageTitle ='Save our communty - Inscription';

 //$success="1";

 // importer la class de connexion à la base de données

 require("class/connect/Db.class.php");
 
 
 ?>



<!DOCTYPE HTML>
<html lang="fr">
<head>
  <?php include ('part/head.php') ?>


  


<style>
/*Custom by as*/

.n-form input[type="text"], .n-form input[type="password"], .n-form input[type="email"], .n-form input[type="tel"],.n-form input[type="date"]
{
    color: #666;
    width: 290px;
    height: 40px;
    display: block;
    margin: 0 auto;
    font-size: 14px;
    max-width: 100%;
    padding: 0px 9px;
    margin-top: 15px;
    font-weight: 400;
    border-radius: 3px;
    background: #f7f7f7;
    border: solid 1px #dfdfdf;
  }
  </style>
<!-- Rediriger veers une page d'inscrititon sans php -->
<!-- <noscript><meta http-equiv="refresh" content="0, projets.php"></noscript> -->


</head>


<body>
<div class="wrapper"> 
  <!-- Header -->
 
  <?php 
  include('part/header-2.php');

 ?>       
    <section class="gray">

    

    <?php 

if (isset($success)) {

	?>

 
<div class="center-block formlog panel" style="display: block; margin-top:Opx;">

	<div class="panel-heading panel-primary" style="width:100%;">
	
		<h6 style="text-align: center; width:100%;" class="panel-title"> Inscription réussie </h6>
	</div>

<div class="panel-body panel-primary"> 
  <h5>Félicitation !</h5>
  <p>Votre compte a été créé et un mail a été envoyé à votre adresse électronique. Veuillez confirmez votre mail pour profiter des avantages de votre plateforme.</p>
  <p>Merci.</p>

  

  <a href="../SOC" class="btn btn-2 blue center-block"> OK</a>


</div>

</div>

  <?php 
  
  unset($success);

} else {
	
	?>
      <div id="form" class="center-block formlog" style="display: block; margin-top:Opx;">
      <form class="n-form" id="subscribeform" name ="subscribeform" action="actions/newuser.php" method="post">
        <div class="form-group">
        <h6 style="text-align: center;">Créer un compte</h6>
          <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Se connecter avec Facebook </button>
          <hr>
          <p style="text-align: center">OU</p>
          <div id="htag"></div>

          <input class="form-control" name="email" id="email" placeholder="E-mail" type="email"> 
          <input class="form-control" name="password" id="password" placeholder="Mot de passe" type="password"> 
          <input class="form-control" name="name" id="name" placeholder="Nom" type="text"> 
          <input class="form-control" name="surname" id="surname" placeholder="Prénom" type="text"> 
          <input class="datepicker" name="datenaissance" id="datenaissance" placeholder="Date de naissance" type="date">  
          <input class="form-control" name ="country" id="country" placeholder="Pays" type="text"> 
          <input class="form-control" name ="city" id="city" placeholder="Ville" type="text"> 
          <input class="form-control" name ="phone" id="phone" placeholder="Téléphone" type="tel"> 

        </div>
        
        <input type="submit" name="submit" id="submit" class="btn btn-2 blue center-block" value ="Valider">
        <br style="clear:both;">
        
      </form>
      </div>
	<?php 
}

 ?>
    



</section>
              
            </div>    

 <?php 
    include("part/footer.php");
 ?>
  

<!-- jQuery (necessary for JavaScript plugins) -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/migrate.js"></script>

<!-- Bootstrap Javascript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- Progressbar -->
<script type="text/javascript" src="assets/js/pieprogress/scripts/rainbow.min.js"></script>
<script type="text/javascript" src="assets/js/pieprogress/scripts/jquery-asPieProgress.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="assets/js/slider-revolution/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assets/js/slider-revolution/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Carousels js -->
<script type="text/javascript" src="assets/js/bxslider/jquery.bxslider.min.js"></script>

<!-- Google Maps -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;v=3.exp"></script>
<script type="text/javascript" src="assets/js/maps/scripts/jquery.gmap.min.js"></script>

<!--Custom Scroll Bar -->
<script type="text/javascript" src="assets/js/jquery.scroll.js"></script>

<!-- Grayscale Images -->
<script type="text/javascript" src="assets/js/jquery.hoverizr.min.js"></script>


<!-- Custom Settings -->
<script type="text/javascript" src="assets/js/custom.js"></script>

<!-- Jquery Plugins - (For Selectbox, EventCountDown) -->
<script type="text/javascript" src="assets/js/plugin.js"></script>

<!-- Event Countdown -->
<script type="text/javascript" src="assets/js/countdown.js"></script>

<!-- Retina Script -->
<script type="text/javascript" src="assets/js/retina.min.js"></script>

<!-- Lodash Script 
<script type="text/javascript" src="assets/js/lodash.js"></script> -->


<script type="text/javascript" charset="utf-8" async defer>

    $(function(){   
    
        //$('body').removeClass('is-loading');

    $('#subscribeform').submit(function(e){
        
     e.preventDefault();

     // var $this = $(this);
      var email = $('#email').val();
      var password = sha1(encodeURIComponent($('#password').val()));
      var name = ($('#name').val());
      var surname = ($('#surname').val());
      var country = ($('#country').val());
      var city = ($('#city').val());
      var phone = ($('#phone').val());
      var datenaissance = ($('#datenaissance').val());
   
     //alert(sha1("3"));
    // return;

 $.post("actions/newuser.php",{email:email,password:password,name:name,surname:surname,datenaissance:datenaissance,country:country,city:city,phone:phone,submit:$('#submit').val()},
        function(data)
        {
          if (data.toString().trim()!="success")
          {
            $('#htag').html(data);
            $('#htag').fadeIn( "slow" );
            //alert(data);
          } 
          else              
          {
           //	window.location.href="dashboard";
           $('#form').replaceWith('<div class="center-block formlog panel" style="display:block;margin-top:Opx"><div class="panel-heading panel-primary" style="width:100%"><h6 style="text-align:center;width:100%" class="panel-title"> Inscription réussie</h6></div><div class="panel-body panel-primary"><h5>Félicitation !</h5><p>Votre compte a été créé et un mail a été envoyé à votre adresse électronique. Veuillez confirmez votre mail pour profiter des avantages de votre plateforme.</p><p>Merci.</p><a href="../SOC" class="btn btn-2 blue center-block"> OK</a></div></div>');

          }
      });
    
    //return false;

    });

  });
      
</script>
  
 


</body>
</html>