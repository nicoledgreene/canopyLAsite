<?php
/*
Template Name: About Page
*/
get_header();
?>

<?php include 'about_variables.php' ?>

<div class="about-container flex-column">
    <div class="nav flex-row">
        <a href="/"><img src="/images/logos/small-logo.png"></a>
    </div>
    <div class="about-hero flex-column">
        <span class="company-name">Canopy LA</span>
        <span class="company-about"><?php echo $hero_text ?></span>
    </div>
    <div class="about-info">
    </div>
</div>


<?php get_footer(); ?>
