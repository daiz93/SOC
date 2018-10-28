<?php
	/** 
	 * Les projets
	 */

	class Project
	{
		private $projetcId;
		private $categoryId;
		private $projectTitle;

		/**
		  * Une phrase d'accroche
		  */
		private $projectSlogan;

		/**
		  * Bref résumé du projet. C'est la 1ere vu du projet avant de l'ouvrir.
		  */
		private $projectResume;

		/**
		  * Description détaillée du projet
		  */
		private $projectDetail;

		/**
		  * Date de publication souhaité par le porteur
		  */
		private $projectStartDatePreview;

		/**
		  * Date a laquelle le projet à été valider pour publication si elle est postérieur à la date souhaité par le porteur de projet. Si non elle correspondra a la date de publication souhaité par le porteur.
		  */
		private $projectStartDateEffectiv;

		/**
		  * Date de fin effective du projet . Est calculée. Date de début effectuve + Durréé en jour.
		  */
		private $projectEndDateEffectiv;

		/**
		  * Image de couverture. Doit etre un lien.
		  */
		private $projectCoverImage;

		/**
		  * Duréé en jour du projet. 
		  */
		private $projectDuration;

		/**
		  * Définie l'état valider par la plateforme. Le projet est reconnu valide par la plateforme.
*isDraft est a true si la rédaction du projet est inachevé. Tout projet démarrer est par défaut isDraft tant que le rédacteur ne signale pas le fin de sa rédaction. seule son auteur peut le voir. isPublished et isValidate ont pour valeur False car ne pouvant pas avoir le meme valeur que isDraft  au même moment
		  */
		private $isDraft;

		/**
		  * Définie l'état valider par la plateforme. Le projet est reconnu valide par la plateforme.
*isValidate est a true si le rédacteur de projet signale qu'il a finit de rédiger et que le projet peut eêtre publier. Il attend donc validation de la plateforme et la date de publication souhaité. isPublished et isDraft ont pour valeur False car ne pouvant pas avoir le meme valeur que isValidate au même moment
		  */
		private $isValidate;

		/**
		  * Définie l'état valider par la plateforme. Le projet est reconnu valide par la plateforme.
*isPublished est a true si le projet est reconnu valide par la plateforme. Il est donc visible de tous. isValidate et isDraft ont pour valeur False car ne pouvant pas avoir le meme valeur que isPublished au même moment
		  */
		private $isPublished;
		private $numberOfLike;
		private $numberOfRead;
		private $monatantALever;

		final public function addProject() {
			
		}

		/**
		  * Modifie les information du projet 
		  */
		final public function updateProject() {
			
		}
		final public function deleteProject() {
			
		}

		/**
		  * Retourne tous les projets
		  */
		final public function getProject() {
			
		}
		final public function getSort($catagory, $isValidate, $isPublished, $success, $down) {
			
		}
		final public function getProjectByUser($iuserId) {
			
		}
		final public function getProjectByCateory($cateorryId) {
			
		}

		/**
		  * Modifie tous les attribue de l'objet encour
		  */
		final public function setProject() {
			
		}

		/**
		  * Marque la fin de la rédaction
		  */
		final public function validateProject() {
			
		}

		/**
		  * Valide la publication du projet
		  */
		final public function publishProject() {
			
		}

		/**
		  * renvoie la liste des liens de la gallerie du projet
		  */
		final public function getProjectGalleries() {
			
		}

		/**
		  * renvoie tous les commentaires du projet
		  */
		final public function getProjectComments() {
			
		}

		/**
		  * renvoie toutes les news du projet
		  */
		final public function getProjectNews() {
			
		}
		final  function __construct() {
			
		}
		final  function __clone() {
			
		}
		final  function __destruct() {
			
		}

	};
?>