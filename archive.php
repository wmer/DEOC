<?php get_header(); //inclui o header na página ?>
<?php include "app/Includes/analyticstracking.php"; ?>
<div>
    <div class="row hide-on-large-only">
        <?php include "app/templates/menuBar.php"; ?>
    </div>
    <div class="row">
        <?php get_sidebar(); //inclui o sidebar ?>
        <div class="col s12 m12 l9 offset-l3"><?php include 'app/templates/Arquivos.php'; ?></div>
    </div>
</div>
<?php get_footer(); ?>
