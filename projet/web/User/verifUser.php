<?php

//on appelle les classes qui vont nous servir

require_once '../../src/App/Manager/UserManager.php';
require_once '../../src/App/Entity/User.php';
require("../../src/App/Manager/imgClass.php");

//on indique l'espace de nom des classes utilisées

use App\Entity\User;
use App\Manager\UserManager;

/**
 * page de vérifiaction du formulaire de création d'utilisateur
 */


$messageChamps="";
$messageError = false;
$messagePass = "";
$messageMail = "";




/**
 * on verifie que le $_POST n'est pas vide.
 */
if (!empty($_POST)) {
    $nameuser = htmlentities($_POST["name"]);
    $firstname = htmlentities($_POST["firstname"]);
    $mail = $_POST['mail'];
    $pass = $_POST['motDePasse'];
    $passbis = $_POST['verifMotDePasse'];
    $age = $_POST['age'];
    $citation = $_POST['citation'];
    $language = $_POST['language'];
    $project = $_POST['project'];
    $messageError = false;
    $verifMail = false;
    $verifPass = false;

    /**
     * on recupere les informations des champs du formulaire dans une boucle et on verifie qu'ils ne soient pas vide
     */
    foreach ($_POST as $name => $value) {
        if (empty($_POST[$name])) {
            $messageChamps .= "le champ ".$name." est vide. <br>";

            $messageError= true;
        }
    }

    /**
     * si le message d'erreur est true alors on redirige vers le formulaire de création.
     */
    if ($messageError) {
        header('location: formUser.php?error='.$messageChamps.
                                        '&name='.$nameuser.
                                        '&firstname='.$firstname.
                                        '&mdp='.$pass.
                                        '&verifpass='.$passbis.
                                        '&mail='.$mail.
                                        '&age='.$age.
                                        '&citation='.$citation.
                                        '&language='.$language.
                                        '&project='.$project);
    } else {



    /**
      * on fait appel au UserManager pour faire les vérification du mail
     */
        $userManager = new UserManager();

        $emailOk = $userManager->verifMail($mail);



        /**
         * on vérifie si l'email est correcte et qu'il n'existe pas dans la bdd
         */
        if (preg_match('#^[\w.-]+@[\w.-]+.[a-z]{2,6}$#i', $mail)) {
            if ($emailOk == true) {
                $verifMail = true;
            } else {
                $messageMail .= "L'email est déja pris";
                header('location: form.php?error='.$messageMail.'&pseudo='.$pseudo.'&mdp='.$pass.'&verifpass='.$passbis);
            }


            /**
             * on vérifie que les mots de passe correspondent.
             */
            if ($pass===$passbis) {
                $verifPass = true;
            } else {
                $messagePass .= "les mots de passe ne correspondent pas. Vérifiez vos champs";
                header('location: form.php?error='.$messagePass);
            }
        } else {
            $messageMail .= "L'email n'est pas correct";
            header('location: form.php?error='.$messageMail);
        }
    }


    /**
     * si le mail et le mot de passe sont correcte on traite les données
     */
    if ($verifMail && $verifPass) {
        //création d'un nouveau contact à partir des données du formulaire

        // creation miniature des profiles
        $img = $_FILES['upload'];

        move_uploaded_file($img['tmp_name'], "imgbd/".$img['name']);

        Img::creerMin("imgbd/".$img['name'], "imgbd/min", $img['name'], 255, 255);




        $user = new User();

        $pass = password_hash(htmlentities($_POST['motDePasse']), PASSWORD_DEFAULT);
        $mail = htmlentities($_POST['mail']);
        $name = htmlentities($_POST['name']);
        $firstname = htmlentities($_POST['firstname']);
        $age = $_POST['age'];
        $photo = htmlentities($_POST['upload']);
        $citation = htmlentities($_POST['citation']);
        $language = htmlentities($_POST['language']);
        $project = htmlentities($_POST['project']);



        $user -> setName($name)
        -> setFirstname($firstname)
        -> setPassword($pass)
        -> setMail($mail)
        -> setAge($age)
        -> setCitation($citation)
        -> setPhoto($photo)
        -> setLanguage($language)
        -> setProject($project);

        //insertion en bdd via le manager

        $userManager = new UserManager();

        $saveIsOk = $userManager-> save($user);
        var_dump($saveIsOk);
        if ($saveIsOk) {
            header('location: ../index.php');
        } else {
            $message = 'l\'utilisateur n\'a pas été ajouté';
            echo($message);
        }
    }
}
