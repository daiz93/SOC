<?php

class Comment
{
   
    /**
     * The attributes 
     *
     */

    protected $commentId;
    protected $commentText;
    public $projectId;
    
/**
     * Constructeur de classe 
     *
    
     */
    function __construct($commentId="",$commentText="",$projectId="")
    {
      $this->$projectId=$projectId;
      $this->$commentId=$commentId;
      $this->$commentText=$commentText;    

    }

    /**
     * Constructeur de copie
     *
    
     */

    function __clone()
    {
      $this->$projectId=$this->$projectId;
      $this->$commentId=$this->$commentId;
      $this->$commentText=$this->$commentText;
      
    }

    /**
     * Modifier tous les attribues d'un utilisateur
     *
    
     */
    private setcomment($commentText)
    {

      $this->$commentText=$commentText;
      
    }

    /**
     * retourne un tableau contenant les attribues du commentaire
     *
    
     */
    public getcomment($projectIdhttps://www.youtube.com/watch?v=dwVj_g3TpZ4){

    }


    /**
     * Ajouter un nouveau compte utilisateur
     *
    
     */
    public addcomment(){

    }


/**
     * Mettre à jour les données dans la base de données
     *
    
     */
    private updatecomment(){

    }

    /**
     * Retourne un tableau avec les infos de compte
     *
    
     */



   
}
