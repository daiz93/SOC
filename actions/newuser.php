<?php 
session_start();


//include('../const.php');
require('../class/user.class.php');


extract($_POST);


$userFirstName =htmlspecialchars(trim($name)) ;
$userLastName =htmlspecialchars(trim($surname)) ;
 $userEmail =htmlspecialchars(trim($email)) ;
 $userPassWord =htmlspecialchars(trim($password));
 $userBirthday =htmlspecialchars(trim($datenaissance));
 $userCountry =htmlspecialchars(trim($country)) ;
 $userCity =htmlspecialchars(trim($city));
 $userPhone =htmlspecialchars(trim($phone));
 


 if (isset($submit)/*  && $submit.toString().toUpper() =="valider" */)
    {

        if (empty($userEmail))
            $error="Mail invalide.";
        else
        if (empty($userPassWord))
            $error="Un mot de passe est requis.";
        else
        if (empty($userFirstName))
            $error="Le nom est requis.";
        else
        if (empty($userLastName))
            $error="Le prénom est requis.";
         else
         if (empty($userBirthday))
         $error="La date de naissance est requise.";
        else
        if (empty($userCountry))
            $error="Le pays est requis.";
        else
        if (empty($userCity))
            $error="La ville est requise.";
        else
            if (empty($userPhone))
        $error="Un numéro de téléphone est requis.";
        else
        // Créer un objet 
        {
            $newUser=new User();
        
            $newUser->setUser('',$userFirstName,$userLastName,$userEmail,$userPassWord,$userCountry,$userCity,$userPhone,$userBirthday);
        // initTo_subscrib($mail,crypt(sha1($password),SHA1("jDcapoKBNKJBVVSKJ65656hgfudbjcJGIFVBKJF5465hjbkjbkvffh5dezd")),$firstname,$lastname,$phonenumber,$state,Date("d/m/Y H:i:s"));
            $state=$newUser->adduser();

            if ($state==true){
                $success="";
                echo("success");

                $_SESSION['success']="ok";
               // header('Location: ../subscribe.php'); 
                return;
            }
            else{
            $error="Erreur 101 : Erreur d\'exécution de votre demande.";} 
        }
       echo($error);
           
        

        
    
    } else {
        return;
        echo('Formulaire invalide');
    }




?>