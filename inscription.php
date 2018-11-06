<?php
session_start();
// la variable est definie dans part/head et défini le titre
 $pageTitle ='Save our communty - Inscription';

 //$success="1";

 // importer la class de connexion à la base de données
 require('class/user.class.php');

 if(isset($_POST['inscription']))
 {

  $email = htmlentities(strip_tags($_POST['email']));
  $password = htmlentities(strip_tags($_POST['password']));
  $passwordc= htmlentities(strip_tags($_POST['passwordc']));
  $name = htmlentities(strip_tags($_POST['name']));
  $surname = htmlentities(strip_tags($_POST['surname']));
  $country = htmlentities(strip_tags($_POST['country']));
  $city = htmlentities(strip_tags($_POST['city']));
  $phone = htmlentities(strip_tags($_POST['phone']));
  $datenaissance = htmlentities(strip_tags($_POST['datenaissance']));
 

 
  
  if (empty($email))
  $error="Le mail est requis.";

  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
  $error="Mail invalide.";

  elseif (empty($password))
  $error="Un mot de passe est requis.";

  elseif (empty($name))
    $error="Le nom est requis.";

  elseif (empty($surname))
    $error="Le prénom est requis.";
    
  elseif (empty($datenaissance))
    $error="La date de naissance est requise.";

  elseif (empty($country))

    $error="Le pays est requis.";
  elseif (empty($city))

    $error="La ville est requise.";
  elseif (empty($phone))
    
    $error="Un numéro de téléphone est requis.";
  elseif (strnatcmp($password,$passwordc) !=0/* Mot de passe != confirmation passe */)

    $error="Les mots de passes ne correpondent pas.";
  else

  {
    // Les infromation nécessaires sont renseignées
    $newUser=new User();
    $newUser->setUser('',$name,$surname,$email,$password,$country,$city,$phone,$datenaissance);
    // initTo_subscrib($mail,crypt(sha1($password),SHA1("jDcapoKBNKJBVVSKJ65656hgfudbjcJGIFVBKJF5465hjbkjbkvffh5dezd")),$firstname,$lastname,$phonenumber,$state,Date("d/m/Y H:i:s"));
    $state=$newUser->adduser();

    if ($state==true || $state==1 || $state=="1"){      
        $success="success";
        //echo("success");
       // header('Location: ../subscribe.php'); 
       // die();
    }
    else{
    $error="Erreur 101 : Erreur d\'exécution de votre demande.";} 
  }


 }


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
      <form class="n-form" id="subscribeform" name ="subscribeform" action="#" method="post">
        <div class="form-group">
        <h6 style="text-align: center;">Créer un compte</h6>
          <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Se connecter avec Facebook </button>
          <hr>
          <p style="text-align: center">OU</p>
          <div id="htag"><?php if (isset($error)) {echo "$error";} else {echo "";}?> </div>

          <input class="form-control" name="email" id="email" placeholder="E-mail" type="email"> 
          <input class="form-control" name="password" id="password" placeholder="Mot de passe" type="password">
          <input class="form-control" name="passwordc" id="passwordc" placeholder="Confirmation" type="password"> 
          <input class="form-control" name="name" id="name" placeholder="Nom" type="text"> 
          <input class="form-control" name="surname" id="surname" placeholder="Prénom" type="text"> 
          <input class="datepicker" name="datenaissance" id="datenaissance" placeholder="Date de naissance" type="date">  
          <input class="form-control" name ="country" id="country" placeholder="Pays" type="text"> 
          <input class="form-control" name ="city" id="city" placeholder="Ville" type="text"> 
          <input class="form-control" name ="phone" id="phone" placeholder="Téléphone" type="tel"> 

        </div>
        
        <input type="submit" name="inscription" id="submit" class="btn btn-2 blue center-block" value ="Inscription">
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



<script>
 
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
        alert ("OK");
        //return;

      var email = $('#email').val();
      var password = sha1(encodeURIComponent($('#password').val()));
      var name = ($('#name').val());
      var surname = ($('#surname').val());
      var country = ($('#country').val());
      var city = ($('#city').val());
      var phone = ($('#phone').val());
      var datenaissance = ($('#datenaissance').val());
      var passwordc= sha1(encodeURIComponent($('#passwordc').val()));
      

        $.post("actions/newuser.php",{email:email,password:password,passwordc:passwordc,name:name,surname:surname,datenaissance:datenaissance,country:country,city:city,phone:phone,inscription:$('#submit').val()},
        function(data)
        {
          if (data.toString().trim()!="success")
          {
            $('#htag').html(data);
            $('#htag').fadeIn(300);
            //alert(data);
          } 
          else              
          {
           // window.location.href="dashboard";
           $('#form').replaceWith('<div class="center-block formlog panel" style="display:block;margin-top:Opx"><div class="panel-heading panel-primary" style="width:100%"><h6 style="text-align:center;width:100%" class="panel-title"> Inscription réussie</h6></div><div class="panel-body panel-primary"><h5>Félicitation !</h5><p>Votre compte a été créé et un mail a été envoyé à votre adresse électronique. Veuillez confirmez votre mail pour profiter des avantages de votre plateforme.</p><p>Merci.</p><a href="../SOC" class="btn btn-2 blue center-block"> OK</a></div></div>');

          }
      });

    });
});
 
</script>
<!--   

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
      var passwordc= sha1(encodeURIComponent($('#passwordc').val()));
   
     //alert(sha1("3"));
    // return;

 $.post("actions/newuser.php",{email:email,password:password,passwordc:passwordc,name:name,surname:surname,datenaissance:datenaissance,country:country,city:city,phone:phone,submit:$('#submit').val()},
        function(data)
        {
          if (data.toString().trim()!="success")
          {
            $('#htag').html(data);
            $('#htag').fadeIn(300);
            //alert(data);
          } 
          else              
          {
           // window.location.href="dashboard";
           $('#form').replaceWith('<div class="center-block formlog panel" style="display:block;margin-top:Opx"><div class="panel-heading panel-primary" style="width:100%"><h6 style="text-align:center;width:100%" class="panel-title"> Inscription réussie</h6></div><div class="panel-body panel-primary"><h5>Félicitation !</h5><p>Votre compte a été créé et un mail a été envoyé à votre adresse électronique. Veuillez confirmez votre mail pour profiter des avantages de votre plateforme.</p><p>Merci.</p><a href="../SOC" class="btn btn-2 blue center-block"> OK</a></div></div>');

          }
      });
    
    //return false;

    });

  });
      
</script>
  
  -->


</body>
</html>
	
	
	
