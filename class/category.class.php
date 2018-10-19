<?php

class Category
{
   
    /**
     * The attributes 
     *
     */

    private $categoryId;
 
    private $categoryName;
    
/**
     * Constructeur de classe 
     *
    
     */
    function __construct()
    {
      $this->categoryId=$categoryId;
      $this->categoryName=$categoryName;
    }

    /**
     * Constructeur de copie
     *
    
     */

    function __clone()
    {
      $this->categoryId=$this->categoryId;
      $this->categoryName=$this->categoryName;
      
    }

    /**
     * Modifier tous les attribues d'un utilisateur
     *
    
     */
    public function setCategory($categoryId,$categoryName)
    {

      $this->categoryId=$categoryId;
      $this->categoryName=$categoryName;
      
    }

    /**
     * retourne un tableau contenant les attribues de l'utilisateur
     *
    
     */
    public function getCategory(){

    }


    /**
     * Ajouter un nouveau compte utilisateur
     *
    
     */
    public function addCategory(){

    }


/**
     * Mettre à jour les données dans la base de données
     *
    
     */
    private function updateCategory(){
    	
    }

    /**
     * Retourne un tableau avec les infos de la catégorie
     *
    
     */
    private function getCategoryInfoById(){

    }

 /**
     * Récupérer les projets de la catégorie
     *
    
     */
    public function getCategoryPoject(){

    }


   
}
