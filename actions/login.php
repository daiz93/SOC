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
        {
            if (empty($userPassWord) || $userPassWord=='142026E65D8A18F37C5ECB959FCB1E93C9DF9367'.$userEmail)
            $error="Un mot de passe est requis.";
            else
                    // Créer un objet 
                {


                        //echo($userPassWord); echo ('<br> 142026E65D8A18F37C5ECB959FCB1E93C9DF9367'.$userEmail); die();
                        $user=new User();
                        $user->setUser('',$userFirstName,$userLastName,$userEmail,$userPassWord,$userCountry,$userCity,$userPhone,$userBirthday);
                        $userdata=$user->checkUserAccount($userEmail,$userPassWord);
                        //$userdata=$userdata->fetch();

                        if(empty($userdata))
                        {
                            $error='Mail ou mot de passe incorrecte.';
                        }
                        else 
                        {//print_r($userdata);
                            session_destroy(); //Détruire la session encour
                            session_start(); // Démarrer une sessiosn à configurer
                            $lifetime=2592000;//La session durera un mois
                            $sessionId=session_id();

                            setcookie(session_name(),$sessionId,time()+$lifetime,null,null,false,true);

                            // charger les variable de session

                            $_SESSION['user']=$userdata['userId'];
                            
                            $_SESSION['nom']=$userdata['userFirstName'];
                            $_SESSION['Prenom']=$userdata['userLastName'];
                            $_SESSION['Email']=$userdata['userEmail'];
                            $_SESSION['Pass']=$userdata['userPassWord'];
                            $_SESSION['Pays']=$userdata['userCountry'];
                            $_SESSION['ville']=$userdata['userCity'];
                            $_SESSION['Tel']=$userdata['userPhone'];
                            $_SESSION['Naissance']=$userdata['userBirthday'];
                            $_SESSION['activer']=$userdata['active'];
                            $_SESSION['adhesion']=$userdata['subscribeDate'];
                        
                        
                            echo ('success');
                            // echo($_SESSION['user']);
                            die();
                            return;
                        }

                }
          
        }
       echo($error);
           

    
    } else {
        return;
        echo('Formulaire invalide');
    }




?>