<?php
	/** 
	 * Les catégorie de projets
	 */

	class Category
	{
		private $categoryId;
		private $categoryName;

		/**
		  * Icone de la catégorie : Est un lien
		  */
		private $categoryIcon;


		/**
		  * Modifie les attributs de l'objet encour
		  * @idCat
		  * @categoryName
		  * @categoryIcon
		  */
		final public function setCategory($idCat, $categoryName, $categoryIcon) {
			$this->categoryId=$idCat;
			$this->categoryName=$categoryName;
			$this->categoryIcon=$categoryIcon;
		}

		/**
		  * retourne l'attribut Id de l'objet encour
		  */
		final public function getId() {
			return $this->categoryId;
		}

		/**
		  * Modifie le nom de l'objet en cours
		  * @categoryName
		  */
		final public function setName($categoryName) {
			$this->categoryName=$categoryName;
		}

		/**
		  * Retourne l'attribut name de l'objet encour
		  */
		final public function getName() {
			return $this->categoryName;
		}

		/**
		  * Retourne l'attribut Icone de lobjet encour
		  */
		final public function getIcon() {
			return $this->categoryIcon;
		}

		/**
		  * Modifie l'attribue Icon de l'objet encour
		  */
		final public function setIcon($categoryIcon) {
			$this->categoryIcon=$categoryIcon;
		}

		/**
		  * Retourne la liste de toutes les catégories
		  */
		final public function getCategories() {
			$db = new DBconnect(DB_HOST, DB_NAME, DB_USER, DB_PASS);
			$categories  =  $db->query("call getCategories");
			return $categories;
		}

		/**
		  * Retorune une catégorie dont on connais le Id
		  * @categoryId
		  */
		final public function getCategoryById($categoryId) {
			
		}

		/**
		  * Ajoute une nouvelle catégorie
		  */
		final public function addCategory() {
			
		}

		/**
		  * Met à jour les propriétés de la catégorie
		  */
		final public function updateCatgory() {
			
		}

		/**
		  * Constructeur
		  */
		final  function __construct() {
			$this->categoryId="";
			$this->categoryName="";
			$this->categoryIcon="";
		}

		/**
		  * Constructeur de copie
		  */
		final  function __clone() {
			$this->categoryId=	$this->categoryId;
			$this->categoryName=$this->categoryName;
			$this->categoryIcon=$this->categoryIcon;
		}

		/**
		  * Destructeur
		  */
		final  function __destruct() {
			
		}
		/**
		 * Les getteurs de la classe
		 * Les méthodes suivantes retrournent les attributs de l'objet encours
		 */

    public function getprojetcId(){ return $this->projetcId;}
    public function getcategoryId(){ return ;}
    public function getProjectTitle(){ return ;}
    public function getProjectSlogan(){ return ;}
    public function getProjectResume(){ return ;}
    public function getProjectDetail(){ return ;}
    public function getProjectStartDatePreview(){ return ;}
    public function getProjectStartDateEffectiv(){ return ;}
    public function getProjectEndDateEffectiv(){ return ;}
    public function getProjectCoverImage(){ return ;}
    public function getProjectDuration(){ return ;}
    public function getIsDraft(){ return ;}
    public function getIsValidate(){ return ;}
    public function getIsPublished(){ return ;}
    public function getNumberOfLike(){ return ;}
    public function getNumberOfRead(){ return ;}
    public function getMonatantALever(){ return ;}



				/**
		 * Les seteurs de la classe
		 * Les méthodes suivantes éditent les attributs de l'objet encours
		 */
		public function setprojetcId($projetcId){ $this->projetcId = $projetcId ;}
    public function setcategoryId(){ $this-> ... = ... ;}
    public function setProjectTitle(){ $this-> ... = ... ;}
    public function setProjectSlogan(){ }
    public function setProjectResume(){ $this-> ... = ... ;}
    public function setProjectDetail(){ $this-> ... = ... ;}
    public function setProjectStartDatePreview(){ $this-> ... = ... ;}
    public function setProjectStartDateEffectiv(){ $this-> ... = ... ;}
    public function setProjectEndDateEffectiv(){ $this-> ... = ... ;}
    public function setProjectCoverImage(){ $this-> ... = ... ;}
    public function setProjectDuration(){ $this-> ... = ... ;}
    public function setIsDraft(){ $this-> ... = ... ;}
    public function setIsValidate(){ $this-> ... = ... ;}
    public function setIsPublished(){ $this-> ... = ... ;}
    public function setNumberOfLike(){ $this-> ... = ... ;}
    public function setNumberOfRead(){ $this-> ... = ... ;}
    public function setMonatantALever(){ $this-> ... = ... ;}




	};
?>