<?php 


/**
 * 
 */
 class Project 
 {

    private $projetcId;
    private $projectTitle;
    private $projectSlogan;
    private $projectResume;
    private $projectStartDatePreview;
    private $projectStartDateEffectiv;
    private $projectEndDateEffectiv;
    private $projectCoverImage;
    private $projectDuration;

    private $isDraft;
    private $isValidate;
    private $isPublished;
    private $numberOfLike;
    private $numberOfRead;
     
    
    	/**
     * Constructeur de classe 
     *
    
     */
 	function __construct()
 	{
        $this->projetcId="";
        $this->projectTitle="";
        $this->projectSlogan="";
        $this->projectResume="";
        $this->projectStartDatePreview="";
        $this->projectStartDateEffectiv="";
        $this->projectEndDateEffectiv="";
        $this->projectCoverImage="";
        $this->projectDuration="";
   
        $this->isDraft="";
        $this->isValidate="";
        $this->isPublished="";
        $this->numberOfLike="";
        $this->numberOfRead="";
   

 	}
 
/**
     * clone de classe 
     *
    
     */
     function __clone()
    {

     } 

      /**
     *Initialisation des propriétés de base de l'ojet
    
     */
     public function setBasicProjectInfo()
     {
        $this->projetcId="";
        $this->projectTitle="";
        $this->projectSlogan="";
        $this->projectResume="";
        $this->projectStartDatePreview="";
        $this->projectStartDateEffectiv="";
        $this->projectEndDateEffectiv="";
        $this->projectCoverImage="";
        $this->projectDuration="";
        
     }

     /**
     *Initialisation des propriétés d'état de l'ojet
    
     */
     public function setProjectState($isDraft,$isValidate,$isPublished,$numberOfLike,$numberOfRead)
     {
        
        $this->isDraft="";
        $this->isValidate="";
        $this->isPublished="";
        $this->numberOfLike="";
        $this->numberOfRead="";
        
     }

      /**
     * la rédaction du projet est encour. Le projet est un brouillon et 
     * l'on peut revenir à tout moment y apporter des modifications.
     *
    
     */

     public function setProjectIsDraft()
     {
        $this->isDraft=true;
        $this->isValidate=false;
        $this->isPublished=false;
        
     }


      /**
     * La rédaction du projet est terminé et le demandeur souhaite qu'elle soit en ligne. Sa mise en ligne 
     * attend validation par la plateforme et la date de publication souhaité par le demandeur.
     *
    
     */

     public function setProjectIsValidate()
     {
        $this->isDraft=false;
        $this->isValidate=true;
        $this->isPublished=false;
        
     }


     /**
     * Le projet est rédigé et publié.
     *
    
     */

     public function setProjectIsPublished()
     {
        $this->isDraft=false;
        $this->isValidate=false;
        $this->isPublished=true;
        
     }


     
    public function setProject()
    {

       
    }
    public function getProject()
    {

       
    }

    public function addProject()
    {

       
    }

    public function addNews()
    {

       
    }

    public function addComment()
    {

       
    }

    public function addCategory()
    {

       
    }


    ?>

