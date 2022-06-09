<?php
require '../include/class/Bdd.class.php';
require '../include/class/Utils.class.php';
require '../include/class/Villageois.class.php';



if (isset($_POST['submit'])) {

    // récupération des données dans des variables pour un traitement plus facile. //
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $dob = $_POST['date_de_naissance'];
    $mdp = $_POST['mot_de_passe'];
    // régex des differents champs du formulaire //
    $regex = "/^[a-zA-Z ]{2,30}$/";   // limite aux lettres min et maj et à 30 car.
    $regex_adresse = '/[^<>%\$#\*]/'; // bloque les caractères spéciaux et authorise
    // seulement les lettres et les chiffres.
    $regex_mdp = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/'; // oblige l'utilisateur à rentrer             //
    // au moins 8 caractères,                     //
    // au moins un nombre,                        //
    // au moins une lettre majuscule,             //
    // au moins une lettre minuscule,             //
    // et au moins un caractère spécial (! @ # $) //
    // vérification que les champs soient tous bien remplis. //
    if (
        empty($email) || empty($nom) || empty($prenom) ||
        empty($adresse) || empty($dob) || empty($mdp)
    ) {
        echo 'Tous les champs doivent être remplis <a href="../../forum_utilisateur/inscription.php">Retour</a>';
    }
    // vérification que toutes les valeurs remplies respectent la regex. //
    else if (
        filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match($regex, $nom) !== false
        && preg_match($regex, $prenom) && preg_match($regex_adresse, $adresse)
        && preg_match($regex_mdp, $mdp,)
    ) {
        // si toutes les vérifications sont passées, alors on ajoute le nouvel utilisateur à la BDD. //
        $newVill = new Villageois($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['date_de_naissance'], $_POST['mot_de_passe'], 'privilege_user', 'mandat_habitant');
        if ($newVill->existInDb()) {
            echo 'Cette adresse email est déjà utilisée <a href="../../forum_utilisateur/inscription.php">Retour</a>';
        } else {
            $newVill->save();
            echo 'Inscription réussie ! <a href="../../forum_utilisateur/index.php">Accueuil</a>';
        }
    } else {
        echo 'Merci de remplir les champs correctement';
    }
}
