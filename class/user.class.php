<?php



class User
{
   
    /**
     * The attributes 
     *
    
     */

    protected $userId;
    protected $userFirstName;
    protected $userLastName;
    protected $userEmail;
    protected $userPassWord;

    protected $userState;
    protected $userCity;
    protected $userPhone;
    protected $userBirthday;

/**
     * Constructeur de classe 
     *
    
     */
    function __construct($userId="",$userFirstName="",$userLastName="",$userEmail="",$userPassWord="",$userState="",$userCity="",$userPhone="",$userBirthday="")
    {
      $this->$userId=$userId;
      $this->$userFirstName=$userFirstName;
      $this->$userLastName=$userLastName;
      $this->$userEmail=$userEmail;
      $this->$userPassWord=$userPassWord;
      $this->$userState=$userState;
      $this->$userCity=$userCity;
      $this->$userPhone=$userPhone;
      $this->$userBirthday=$userBirthday;

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
      $this->$userState=$this->$userState;
      $this->$userCity=$this->$userCity;
      $this->$userPhone=$this->$userPhone;
      $this->$userBirthday=$this->$userBirthday;

    }

    /**
     * Modifier tous les attribues d'un utilisateur
     *
    
     */
    private setUser($userId,$userFirstName,$userLastName,$userEmail,$userPassWord,$userState,$userCity,$userPhone,$userBirthday)
    {

      $this->$userId=$userId;
      $this->$userFirstName=$userFirstName;
      $this->$userLastName=$userLastName;
      $this->$userEmail=$userEmail;
      $this->$userPassWord=$userPassWord;
      $this->$userState=$userState;
      $this->$userCity=$userCity;
      $this->$userPhone=$userPhone;
      $this->$userBirthday=$userBirthday;

    }

    /**
     * retourne un tableau contenant les attribues de l'utilisateur
     *
    
     */
    public getUser(){

    }


    /**
     * Ajouter un nouveau compte utilisateur
     *
    
     */
    public addUser(){

    }


/**
     * Mettre à jour les données dans la base de données
     *
    
     */
    private updateUser(){}


    /**
     * Retourne un tableau avec les infos de compte
     *
    
     */
    private getUserInfoById(){}



 /**
     * Récupérer les projets de l'utilisateurs
     *
    
     */
    public getUserPoject(){}

/**
     * Verifie l'existance d'un compte utilisateur
     *
    
     */
    public boolean checkUserAccount($userEmail,$userPassWord)
    {

    }



      
   
}
