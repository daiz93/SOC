<?php 
session_start();


//include('../const.php');
require('../class/user.class.php');


extract($_POST);


$userFirstName ="";
$userLastName ="";
$userEmail =htmlspecialchars(trim($email));
$userPassWord =htmlspecialchars(trim($password.$userEmail));
$userBirthday ="";
$userCountry ="";
$userCity ="";
$userPhone ="";
 


 if (isset($submit)/*  && $submit.toString().toUpper() =="valider" */)
    {
       
        if (empty($userEmail))
            $error="Mail invalide.";
        else
        if (empty($userPassWord))
            $error="Un mot de passe est requis.";
       
        else
        // Créer un objet 
        {
            $user=new User();
            $user->setUser('',$userFirstName,$userLastName,$userEmail,$userPassWord,$userCountry,$userCity,$userPhone,$userBirthday);
            
            $userdata=$user->checkUserAccount($userEmail,$userPassWord);
            //$userdata=$userdata->fetch();

            if(empty($userdata))
            {
                echo ('Erreur dans les données saisies.');
            }
            else 
            {echo($userdata);}
die();
            echo(4);
            die();
        
            $newUser->setUser('',$userFirstName,$userLastName,$userEmail,$userPassWord,$userCountry,$userCity,$userPhone,$userBirthday);
        // initTo_subscrib($mail,crypt(sha1($password),SHA1("jDcapoKBNKJBVVSKJ65656hgfudbjcJGIFVBKJF5465hjbkjbkvffh5dezd")),$firstname,$lastname,$phonenumber,$state,Date("d/m/Y H:i:s"));
            $state=$newUser->adduser();

            if ($state==true){
                $success="";
                echo("success");

                $success;
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