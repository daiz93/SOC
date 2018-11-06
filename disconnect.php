<?php  
    session_start();
    unset($_SESSION);
    session_destroy();
    header('location:../SOC');

    efface_cookies(); //  efface toute les infos contenus dans les cookies



    function efface_cookies()
    {
     global $HTTP_COOKIE_VARS;
     if (0 < sizeof($HTTP_COOKIE_VARS))
       { while (list ($k_cookie, $v_cookie) = each ($HTTP_COOKIE_VARS))
         { 
             setcookie($k_cookie);
         }
       }
    }
    
   
    
    



?>