<?php

class news
{   
    /**
     * The attributes 
     *
     */

    protected $newsId;
    protected $newsTitle;
    protected boolean $isImage;
    protected boolean $isVideo;
    protected boolean $isTexte;
    protected $newsContent;

    
/**
     * Constructeur de classe 
     *
    
     */
    function __construct($newsId="",$newsTitle="",$isImage=false,$isVideo=false,$isTexte=false,$newsContent="")
    {
      $this->$newsId=$newsId;
      $this->$newsTitle=$newsTitle;
      $this->$isImage=$isImage;
      $this->$isVideo=$isVideo;
      $this->$isTexte=$isTexte;
      $this->$newsContent=$newsContent;

    }

    /**
     * Constructeur de copie
     *
     */

    function __clone()
    {
      $this->$newsId=$this->$newsId;
      $this->$newsTitle=$this->$newsTitle;
      $this->$isImage=$this->$isImage;
      $this->$isVideo=$this->$isVideo;
      $this->$isTexte=$this->$isTexte;
      $this->$newsContent=$this->$newsContent;
      
    }

    /**
     * Modifier tous les attribues d'un utilisateur
     *
    
     */
    private setNews($newsId,$newsTitle,$isImage,$isVideo,$isTexte,$newsContent)
    {

      $this->$newsId=$newsId;
      $this->$newsTitle=$newsTitle;
      $this->$isImage=$isImage;
      $this->$isVideo=$isVideo;
      $this->$isTexte=$isTexte;
      $this->$newsContent=$newsContent;
      
    }

    private addNews($newsId)
    {
            
    }

    private updateNews($newsId)
    {
            
    }

    private deleteNews($newsId)
    {
            
    }

 /**
     * Récupérer les projets de la catégorie
     *
    
     */
    public getNewsByProjet(){

    }


   
}
