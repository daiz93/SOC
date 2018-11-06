<?php 

require('../class/user.class.php');
//header("Content-Type: application/Json; charset=utf-8");
extract($_POST);




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
   
      echo($success);
      die();

      
   }
   else{
   $error="Erreur 101 : Erreur d\'exécution de votre demande.";} 
 }

    echo($error);

}

else {
    // return;
     echo('Formulaire invalide');
 }






?>

 