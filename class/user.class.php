<?php

include('connect/Db.class.php');

class User 
{
   
    /**
     * The attributes 
     *
    
     */

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
     * Constructeur de classe 
     *
    
     */
    function __construct()
    {
      $this->userId="";
      $this->userFirstName="";
      $this->userLastName="";
      $this->userEmail="";
      $this->userPassWord="";
      $this->userCountry="";
      $this->userCity="";
      $this->userPhone="";
      $this->userBirthday=""; 

    }

    /**
     * Constructeur de copie
     *
    
     */

    function __clone()
    {
      $this->$userId=$this->$userId;
      $this->$userFirstName=$this->$userFirstName;
      $this->$userLastName=$this->$userLastName;
      $this->$userEmail=$this->$userEmail;
      $this->$userPassWord=$this->$userPassWord;
      $this->$userCountry=$this->$userCountry;
      $this->$userCity=$this->$userCity;
      $this->$userPhone=$this->$userPhone;
      $this->$userBirthday=$this->$userBirthday;

    }

    /**
     * Modifier tous les attribues d'un utilisateur
     *
    
     */
    public function setUser($userId="",$userFirstName="",$userLastName="",$userEmail="",$userPassWord="",$userCountry="",$userCity="",$userPhone="",$userBirthday="")
    {
      $this->userId=$userId;
      $this->userFirstName=$userFirstName;
      $this->userLastName=$userLastName;
      $this->userEmail=$userEmail;
      $this->userPassWord=$userPassWord;
      $this->userCountry=$userCountry;
      $this->userCity=$userCity;
      $this->userPhone=$userPhone;
      $this->userBirthday=$userBirthday;

    }

    /**
     * retourne un tableau contenant les attribues de l'utilisateur
     *
    
     */
    private function getUser(){

    }


    /**
     * Se connecte à la base de données pour ajouter un nouveau compte utilisateur
     *
    
     */
    public function addUser() {
      $db = new DBconnect(DB_HOST, DB_NAME, DB_USER, DB_PASS);
      $insert   =  $db->query("call addUser (:userFirstName,:userLastName,:userEmail,:userPassWord,:userCountry,:userCity,:userPhone,:userBirthday)", array("userFirstName"=>"$this->userFirstName","userLastName"=>"$this->userLastName","userEmail"=>"$this->userEmail","userPassWord"=>"$this->userPassWord","userCountry"=>"$this->userCountry","userCity"=>"$this->userCity","userPhone"=>"$this->userPhone","userBirthday"=>"$this->userBirthday"));
      
      return $insert;
      // Do something with the data 
      if($insert > 0 ) {
        //Succesfully created a new person !
        return true;
      }
      else {return false;} 
      
    }


/**
     * Se connecte à la base de données pour mettre à jour les informations de compte d'un utilisateur
     *
    
     */
    public function updateUser(){}


    /**
     * Retourne un tableau avec les infos de compte
     *
    
     */
    public function getUserInfoById(){}



 /**
     * Récupérer les projets de l'utilisateurs
     *
    
     */
    public function getUserPoject(){}

/**
     * Verifie l'existance d'un compte utilisateur
     *
    
     */
    public function checkUserAccount()
    {

    }



      
   
}
