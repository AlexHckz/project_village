<?php
require '../include/class/Bdd.class.php';
require '../include/class/Utils.class.php';
require '../include/class/Villageois.class.php';
require '../include/class/Proposition.class.php';
require '../include/class/Periode.class.php';

$proposition = Proposition::getById(1);
?>

<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title"><?php echo $proposition->proposition_titre ?></h2>
        <h3 class="post-subtitle"><?php echo $proposition->proposition_description ?></h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!"><?php echo $proposition->villageois()->villageois_EMAIL ?></a>
        on <?php echo $proposition->periode()->periode_date_debut ?>
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />