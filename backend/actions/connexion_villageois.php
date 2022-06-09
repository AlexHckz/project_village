<?php
require '../include/class/Bdd.class.php';
require '../include/class/Utils.class.php';
require '../include/class/Villageois.class.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $mdp = $_POST['mot_de_passe'];
  $auth = false;
  $regex_mdp = '/^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.\W).{8,}$/';

  if (empty($email) || empty($mdp)) {
    echo 'tous les champs sont requis';
  } else {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && Villageois::testPass($email, $mdp)) /* && preg_match($regex_mdp, $mdp) */ {

      if (Villageois::testPass($email, $mdp)) {
        $auth = true;
        //echo 'Votre mot de passe est incorrect';
      // } if ($auth) {
        header("Location:../../espace_admin/index.html");
        // return;
      }
    }
  } if (!$auth) {
    header("Location:../../espace_admin/login.php/?error=1");
    echo 'mot de passe invalide';
}
}
