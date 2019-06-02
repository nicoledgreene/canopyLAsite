<?php
/*
Template Name: Project Page
*/
get_header();
?>

<?php include 'project_variables.php' ?>
<?php include 'variables.php' ?>

<div class="project-container">
    <?php include('nav.php'); ?>

    <div class="slider">
        <?php 
            if(get_field('project_video_link')) {
                echo "<div id='slideItem100' class='videoWrapper'>";
                    echo get_field('project_video_link');
                echo "</div>";
            }
        ?>
        <?php
            if(!empty($sliderImages)) {
                foreach ($sliderImages as $key=>$image) {
                    echo "<div class='slide' id='slideItem";
                    echo $key;
                    echo "'>";
                        echo "<img src=";
                        echo $image["url"];
                        echo ">";
                    echo "</div>";
                }
            }
        ?>
        <div id="slidePrevious">
            <i class="fa fa-chevron-left"></i>
            <!-- <i class="fa fa-chevron-circle-left"></i> -->
        </div>
        <div id="slideNext">
            <!-- <i class="fa fa-chevron-circle-right"></i> -->
            <i class="fa fa-chevron-right"></i>
        </div>
    </div>
    <div class="project-info-detail">
        <h4><?php echo $project_title ?></h4>
        <span class="proj-subtitle"><?php echo $project_subtitle ?></span>
        <div id="proj-desc">
            <?php echo $project_description ?>
        </div>
        <div class="line"></div>
        <div class="project-breakdown">
            <div class="column">
                <div class="breakdown-column bc1">
                    <span class="subhead">CLIENT</span>
                    <span><?php echo $client_name ?></span>
                </div>
                <div class="breakdown-column bc2">
                    <span class="subhead">ADDITIONAL CREDITS</span>
                    <div><?php echo $team_credits; ?></div>
                </div>
            </div>
            <div class="column">
                <div class="breakdown-column bc3">
                    <span class="subhead">TOOLS USED</span>
                    <div  id="tools"><?php echo $tools_used; ?></div>
                </div>
                <div class="breakdown-column bc4">
                    <span class="subhead">CONTACT US</span>
                    <span><?php echo $contact_us?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="projectPagePlaceholder"></div>

<?php get_footer(); ?>
