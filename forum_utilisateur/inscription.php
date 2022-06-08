<?php
//pour affecter une image de fond au header a partir du composant generique
$header_img = 'assets/img/contact-bg.jpg';
if (!isset($_COOKIE["msg"])) {
    $_COOKIE["msg"] = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>

    <!-- Nav -->
    <?php include_once("./components/nav.php"); ?>

    <!-- Header -->
    <?php include_once("./components/header.php"); ?>


    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as
                        soon as possible!</p>

                    <div class="my-5">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" class="" action="../backend/actions/enregistrement_villageois.php" method="post">

                            <div class="form-floating">
                                <input class="form-control" id="email" name="email" type="text" placeholder="Enter your email..." data-sb-validations="required" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Un email est requis.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="nom" name="nom" type="text" placeholder="Enter your nom..." data-sb-validations="required" />
                                <label for="nom">Nom : </label>
                                <div class="invalid-feedback" data-sb-feedback="nom:required">Un nom est requis.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="prenom" name="prenom" type="text" placeholder="Enter your prenom..." data-sb-validations="required" />
                                <label for="prenom">Prénom : </label>
                                <div class="invalid-feedback" data-sb-feedback="prenom:required">Un prénom est requis.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="adresse" name="adresse" type="text" placeholder="Enter your adresse..." data-sb-validations="required" />
                                <label for="adresse">Adresse : </label>
                                <div class="invalid-feedback" data-sb-feedback="adresse:required">Une adresse valide est requise.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="date_de_naissance" name="date_de_naissance" type="text" placeholder="Mois-Jour-Année" data-sb-validations="required" />
                                <label for="date_de_naissance">Date de naissance : </label>
                                <div class="invalid-feedback" data-sb-feedback="date_de_naissance:required">Une date de naissance valide est requise.</div>
                            </div>


                            <!-- <div>
                                <label for="email">entrez votre email : </label>
                                <input class="form-control" type="text" name="email" placeholder="xyz@xyz.fr" required="required">
                            </div> -->

                            <!-- <div>
                                <label for="nom">entrez votre nom : </label>
                                <input type="text" name="nom" placeholder="votre nom" required="required">
                            </div> -->
                            <!-- <div>
                                <label for="prenom">entrez votre prénom : </label>
                                <input type="text" name="prenom" placeholder="votre prénom" required="required">
                            </div> -->
                            <!-- <div>
                                <label for="adresse">entrez votre adresse : </label>
                                <input type="text" name="adresse" placeholder="votre adresse" required="required">
                            </div> -->
                            <!-- <div>
                                <label for="date_de_naissance">entrez votre dob : </label>
                                <input type="text" name="date_de_naissance" placeholder="MM-JJ-AAAA" required="required">
                            </div> -->
                            <div class="form-floating">
                                <input class="form-control" type="password" name="mot_de_passe" placeholder="entrez un mot de passe" required="required">
                                <label for="mot_de_passe">Mot de passe</label>
                            </div>

                            <input class="btn btn-primary text-uppercase" id="submitButton" type="submit" name="submit" value="sub" style="margin-top:1rem">
                        </form>

                        <p><?php echo $_COOKIE["msg"]; ?></p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include_once("./components/footer.php"); ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
