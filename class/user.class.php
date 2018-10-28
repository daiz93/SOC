<?php
include('connect/Db.class.php');
	class User
	{
		

	
		
		private $userId;
		private $userFirstName;
		private $userLastName;
		private $userEmail;
		private $userPassWord;
		private $userCountry;
		private $userCity;
		private $userPhone;
		private $userBirthday;
    	/**
		  * Défini si le compte a été validé par mail ou non
		  */
		private $active;
    private $subscribeDate;

		/**
		  * Enregistre un nouvelle utilisateur
		  */
		final public function addUser() 
		{
			$db = new DBconnect(DB_HOST, DB_NAME, DB_USER, DB_PASS);
      		$insert   =  $db->query("call addUser (:userFirstName,:userLastName,:userEmail,:userPassWord,:userCountry,:userCity,:userPhone,:userBirthday)", array("userFirstName"=>"$this->userFirstName","userLastName"=>"$this->userLastName","userEmail"=>"$this->userEmail","userPassWord"=>"sha1($this->userPassWord)","userCountry"=>"$this->userCountry","userCity"=>"$this->userCity","userPhone"=>"$this->userPhone","userBirthday"=>"$this->userBirthday"));

	      // Do something with the data 
      		//si $insert est suppérieur à  0 alors la requete a été executée et on renvoie la valeur true.
	      if($insert > 0 )
	      	{
		        //Succesfully created a new person !
		        return true;
	     	 }
	      else
	       { // echec de l'ajout
	       	return false;
	       } 
				
		}

		/**
		  * Met à jour les information de l'utilisateur
		  */
		final public function updateUser() 
		{
			$db = new DBconnect(DB_HOST, DB_NAME, DB_USER, DB_PASS);
      		$update   =  $db->query("call updateUser (:userFirstName,:userLastName,:userEmail,:userPassWord,:userCountry,:userCity,:userPhone,:userBirthday,:userId)", array("userFirstName"=>"$this->userFirstName","userLastName"=>"$this->userLastName","userEmail"=>"$this->userEmail","userPassWord"=>"sha1($this->userPassWord)","userCountry"=>"$this->userCountry","userCity"=>"$this->userCity","userPhone"=>"$this->userPhone","userBirthday"=>"$this->userBirthday","$this->userId"));

      		// Do something with the data 
		    if($update > 0 ) {
		        //Succesfully update  person !
		        return true;
		    }
		    else {return false;} 
		}

		/**
		  * Vérifie les information de connexion de l'utilisateur 
		  * @login
		  * @pass
		  */
		final public function checkUserAccount($login, $pass) 
		{
			
	      $db = new DBconnect(DB_HOST, DB_NAME, DB_USER, DB_PASS);
	      // Récupérons la ligne de l'utilisateur correspondant
	      $compte  =  $db->row("call getUserToConnect (:userEmail,:userPassWord)", array("userEmail"=>"$login","userPassWord"=>"sha1($pass)"));

	      // Do something with the data 
	      // Si les information sont correcte alors  $compte  doit contenir une ligne dans ce cas on renvoie la ligne si non on renvoie  $compte  qui est vide
	      if(!empty($compte) ) {
	        //Succesfully created a new person !
	        return $compte;
	      }
	      else {return $compte;} 
		}

		/**
		  * Retourne un tableau contenant les informations de l'utilisateur
		  * @id
		  */
		final public function getUserById(&$id) {
			
		}

		/**
		  * Active le compte
		  * @activationKey
		  */
		final public function activateUser(&$activationKey) {
			
		}

		/**
		  * Désactive un compte
		  * @id
		  */
		final public function deactivateUser(&$id) {
			
		}

		/**
		  * Renvoie un tableau contenant les attributs de l'objet encour
		  */
		final public function getUser() {
			
		}

		

		/**
		  * Renvoie tous les projets d'un utilisateur
		  * @idUser
		  */
		final public function getUserPoject($idUser) {
			
		}

		/**
		  * Les projets échoués de l'utilisateur
		  * @idUser
		  */
		final public function getUserPojectIsDown($idUser) {
			
		}

		/**
		  * Renvoie les projets réussis d'un l'utilisateur
		  * @idUser
		  */
		final public function getUserPojectIsSuccess($idUser) {
			
		}

		/**
		  * Renvoie les projets encour de rédaction
		  * @idUser
		  */
		final public function getUserPojectIsDraft($idUser) {
			
		}

		/**
		  * Le projets non validés ,pour publication, d'un utilisateur
		  * @idUser
		  */
		final public function getUserPojectINotValidate($idUser) {
			
		}

		/**
		  * Contruit un objet User vide
		  */
		final  function __construct() {
			$this->userId="";
	     	$this->userFirstName="";
	     	$this->userLastName="";
	     	$this->userEmail="";
	     	$this->userPassWord="";
	     	$this->userCountry="";
	     	$this->userCity="";
	    	$this->userPhone="";
	    	$this->userBirthday=""; 
	    	$this->subscribeDate="";
	    	$this->active="";
	    

		}

		/**
		  * copie un objet user vers un autre
		  */
		final  function __clone() {
			$this->$userId=$this->$userId;
      		$this->$userFirstName=$this->$userFirstName;
      		$this->$userLastName=$this->$userLastName;
      		$this->$userEmail=$this->$userEmail;
      		$this->$userPassWord=$this->$userPassWord;
      		$this->$userCountry=$this->$userCountry;
      		$this->$userCity=$this->$userCity;
      		$this->$userPhone=$this->$userPhone;
      		$this->$userBirthday=$this->$userBirthday;
			$this->$subscribeDate=$this->$subscribeDate;
      		$this->$active=$this->$active;
			
		}
		final  function __destruct() {
			
		}

		/**
		  * Met à jour les attributs de l'objet User
		  * @userId
		  * @userFirstName
		  * @userId
		  * @userEmail
		  * @userPassWord
		  * @userCountry
		  * @userCity
		  * @userPhone
		  * @userBirthday
		  */
		final public function setUser($userId, $userFirstName, $userLastName, $userEmail, $userPassWord, $userCountry, $userCity, $userPhone, $userBirthday) {
			$this->userId=$userId;
      		$this->userFirstName=$userFirstName;
      		$this->userLastName=$userLastName;
      		$this->userEmail=$userEmail;
      		$this->userPassWord=$userPassWord;
      		$this->userCountry=$userCountry;
      		$this->userCity=$userCity;
      		$this->userPhone=$userPhone;
      		$this->userBirthday=$userBirthday;
      		/*$this->subscribeDate=$subscribeDate;
      		$this->active=$active;*/

			
		}

	};
?>