<?php
require '../backend/include/class/Bdd.class.php';
require '../backend/include/class/Utils.class.php';
require '../backend/include/class/Villageois.class.php';
require '../backend/include/class/Proposition.class.php';
require '../backend/include/class/Periode.class.php';

$prop_id = $_GET["proposition_ID"];
$proposition = Proposition::getById($prop_id);
?>

<!-- Post preview-->

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $proposition->proposition_titre ?></h1>
                    <h2 class="subheading">Proposition numéro <?php echo $proposition->proposition_ID ?></h2>
                    <span class="meta">
                        Publié par : la communauté<br>
                        <a href="charte.php">Voir la charte</a>
                        on August 24, 2022
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p><?php echo $proposition->proposition_description ?></p>
            </div>
        </div>
    </div>
</main>