<?php

class Category
{
   
    /**
     * The attributes 
     *
     */

    protected $categoryId;
    protected $categoryName;
    
/**
     * Constructeur de classe 
     *
    
     */
    function __construct($categoryId="",$categoryName="")
    {
      $this->$categoryId=$categoryId;
      $this->$categoryName=$categoryName;
    }

    /**
     * Constructeur de copie
     *
    
     */

    function __clone()
    {
      $this->$categoryId=$this->$categoryId;
      $this->$categoryName=$this->$categoryName;
      
    }

    /**
     * Modifier tous les attribues d'un utilisateur
     *
    
     */
    private setCategory($categoryId,$categoryName)
    {

      $this->$categoryId=$categoryId;
      $this->$categoryName=$categoryName;
      
    }

    /**
     * retourne un tableau contenant les attribues de l'utilisateur
     *
    
     */
    public getCategory(){

    }


    /**
     * Ajouter un nouveau compte utilisateur
     *
    
     */
    public addCategory(){

    }


/**
     * Mettre à jour les données dans la base de données
     *
    
     */
    private updateCategory(){
    	
    }

    /**
     * Retourne un tableau avec les infos de compte
     *
    
     */
    private getCategoryInfoById(){

    }

 /**
     * Récupérer les projets de l'utilisateurs
     *
    
     */
    public getCategoryPoject(){

    }


   
}
