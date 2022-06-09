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
                                <input class="form-control" id="proposition_titre" name="proposition_titre" type="text" placeholder="Enter your proposition_titre..." data-sb-validations="required" />
                                <label for="proposition_titre">Proposition_titre</label>
                                <div class="invalid-feedback" data-sb-feedback="proposition_titre:required">A title is required.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="proposition_img" name="proposition_img" type="text" placeholder="Enter your proposition_img..." data-sb-validations="required" />
                                <label for="proposition_img">Proposition_img : </label>
                                <div class="invalid-feedback" data-sb-feedback="proposition_img:required">An img is required.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" type="date" id="proposition_date" name="proposition_date" value="" min="2000-01-01">
                                <label for="proposition_date">Proposition_date : </label>
                                <div class="invalid-feedback" data-sb-feedback="proposition_date:required">A date is required.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" type="date" id="perioded" name="perioded" value="" min="2000-01-01">
                                <label for="perioded">Perioded : </label>
                                <div class="invalid-feedback" data-sb-feedback="perioded:required">A periode is required.</div>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" type="date" id="periodef" name="periodef" value="" min="2000-01-01">
                                <label for="periodef">Periodef : </label>
                                <div class="invalid-feedback" data-sb-feedback="periodef:required">A periode is required.</div>
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