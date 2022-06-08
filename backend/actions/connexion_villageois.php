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
      //$check = new Villageois(villageois_EMAIL: $email, )
     if (Villageois::testPass($email, $mdp)) {
      // if ($check->testExist()) {
      //   var_dump($check->testPass());
      //   return $auth = true;
      // }
      $auth = true;
      //echo 'Votre mot de passe est incorrect';
    }
    } elseif (!$auth) {
      echo 'Nous ne connaissons pas cette adresse Email.';
      }
      if ($auth) {
        echo 'coucou';
        header('Location:home.php');
      }
    }

}
