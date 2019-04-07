<?php
/*
Template Name: About Page
*/
get_header();
?>

<?php include 'about_variables.php' ?>

<div class="about-container flex-column">
    <div class="background-upper"></div>

    <div class="about-upper">
        <div class="nav flex-row">
            <a class="small-logo" href="<?php echo $host ?>"><img src="<?php echo $host . '/wp-content/uploads/2019/04/small-logo.png' ?>"></a>
            <a class="hamburger flex-column">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </a>
        </div>
        <div class="about-hero flex-column">
            <span class="company-name">Canopy LA</span>
            <span class="company-about"><?php echo $hero_text ?></span>
        </div>
    </div>
    <div class="about-info">
        <img class="the-gang" src="<?php echo $main_img["url"] ?>">
        <div class="bios">
            <div class="person">
                <div class="name">
                    <span><?php echo $p1_name ?></span>
                    <span><?php echo $p1_title ?></span>
                </div>
                <div class="bio-desc">
                    <span><?php echo $p1_description ?></span>
                </div>
                <div class="bio-email">
                    <span>E. <?php echo $p1_email ?></span>
                </div>
            </div>
            <div class="person">
                <div class="name">
                    <span><?php echo $p2_name ?></span>
                    <span><?php echo $p2_title ?></span>
                </div>
                <div class="bio-desc">
                    <span><?php echo $p2_description ?></span>
                </div>
                <div class="bio-email">
                    <span>E. <?php echo $p2_email ?></span>
                </div>
            </div>
            <div class="person">
                <div class="name">
                    <span><?php echo $p3_name ?></span>
                    <span><?php echo $p3_title ?></span>
                </div>
                <div class="bio-desc">
                    <span><?php echo $p3_description ?></span>
                </div>
                <div class="bio-email">
                    <span>E. <?php echo $p3_email ?></span>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
