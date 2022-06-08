<?php
include_once("../backend/include/Autoloader.inc.php");
Autoloader::register();

$data = Proposition::all();
foreach ($data as $proposition) : ?>

    <!-- Post preview-->
    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title"><?= $proposition->proposition_titre ?></h2>
            <h3 class="post-subtitle"><?= $proposition->proposition_description ?></h3>
        </a>
        <p class="post-meta">
            Posted by
            <a href="#!"><?= $proposition->villageois()->villageois_EMAIL ?></a>
            on <?= $proposition->periode()->periode_date_debut ?>
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />


<?php endforeach; ?>