<?php

<<<<<<< HEAD
namespace App\Entity;


/**
 * class qui va permettre de créer des utilisateurs 
 */
class User {


    /**
     * @var int     $ID_user     identifiant de l'utilisateur (généré auto par la bdd donc pas de setter)
     */

     private   $ID_user;
	


     /**
      *  @var string $Pseudo_user    pseudo de l'utilisateur
      */
     private   $Name_user;



     /**
      *  @var string $Pseudo_user    pseudo de l'utilisateur
      */
      private   $Firstname_user;
	


     /**
      *  @var string $Password_user     mot de passe de l'utilisateur 
      */
     private $Password_user;



     /** 
      * @var string $Mail_user      email de l'utilisateur 
      */
     private $Mail_user;


     /** 
      * @var string $Age_user      age de l'utilisateur 
      */
      private $Age_user;


      /** 
      * @var string $Photo_user      photo de l'utilisateur 
      */
     private $Photo_user;


     /** 
      * @var string $Citation_user      citation de l'utilisateur 
      */
      private $Citation_user;


      /** 
      * @var string $Language_user      langage preferer de l'utilisateur 
      */
     private $Language_user;



     /** 
      * @var string $Project_user      projet de l'utilisateur 
      */
      private $Project_user;

     
    
    /**
     * getter pour l'id de l'utilisateur
     *
     * @return int
     */
    public function getId()
    {
        return $this->ID_user;
    }

    
    /**
     * getter pour le nom de l'utilisateur
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name_user;
    }

        /**
         * setter pour le nom de l'utilisateur
         *
         * @param string $Name_user
         * @return User
         */
    public function setName($Name_user)
    {
        $this->Name_user = $Name_user;
        return $this;
    }

     /**
     * getter pour le prenom de l'utilisateur
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->Firstname_user;
    }

        /**
         * setter pour le prenom de l'utilisateur
         *
         * @param string $Firstname_user
         * @return User
         */
    public function setPrenom($Firstname_user)
    {
        $this->Firstname_user = $Firstname_user;
        return $this;
    }

    /**
     * getter pour le mot de passe de l'utilisateur
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password_user;
    }

    /**
     * setter pour le mot de passe de l'utilisateur
     *
     * @param string $Password_user
     * @return User
     */
    public function setPassword($Password_user)
    {
        $this->Password_user = $Password_user;
        return $this;
    }

    /**
     * getter pour l'email de l'utilisateur
     *
     * @return string
     */
    public function getMail()
    {
        return $this->Mail_user;
    }

    /**
     * setter pour l'email de l'utilisateur
     *
     * @param string $Mail_user
     * @return User
     */
    public function setMail($Mail_user)
    {
        $this->Mail_user = $Mail_user;
        return $this;
    }

    /**
     * getter pour l'age de l'utilisateur
     *
     * @return int
     */
    public function getAge()
    {
        return $this->Age_user;
    }

    /**
     * setter pour l'age de l'utilisateur
     *
     * @param int $Age_user
     * @return User
     */
    public function setAge($Age_user)
    {
        $this->Mail_uAge_userser = $Age_user;
        return $this;
    }

    /**
     * getter pour la photo de l'utilisateur
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo_user;
    }

    /**
     * setter pour la photo de l'utilisateur
     *
     * @param string $photo_user
     * @return User
     */
    public function setPhoto($photo_user)
    {
        $this->photo_user = $photo_user;
        return $this;
    }

    /**
     * getter pour la citation de l'utilisateur
     *
     * @return string
     */
    public function getCitation()
    {
        return $this->Citation_user;
    }

    /**
     * setter pour la citation de l'utilisateur
     *
     * @param string $Citation_user
     * @return User
     */
    public function setCitation($Citation_user)
    {
        $this->Citation_user = $Citation_user;
        return $this;
    }

    /**
     * getter pour le langage préféré de l'utilisateur
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language_user;
    }

    /**
     * setter pour le langage préféré de l'utilisateur
     *
     * @param string $Language_user
     * @return User
     */
    public function setLanguage($Language_user)
    {
        $this->Language_user = $Language_user;
        return $this;
    }

    /**
     * getter pour le projet de l'utilisateur
     *
     * @return string
     */
    public function getProject()
    {
        return $this->Project_user;
    }

    /**
     * setter pour le projet de l'utilisateur
     *
     * @param string $Project_user
     * @return User
     */
    public function setProject($Project_user)
    {
        $this->Project_user = $Project_user;
        return $this;
    }
     


     
}
=======
<h1>test max</h1>


 ?>
>>>>>>> d946add93d15c04a5211e9301a3c42480b98dd31
