<?php
/*
Template Name: Project Page With Video
*/
get_header();
?>

<?php include 'project_variables.php' ?>

<div class="project-container">
    <div class="slideshow">
        <div class="videoWrapper">
            <?php echo $video_link ?>
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
                <div class="breakdown-column">
                    <span class="subhead">CLIENT</span>
                    <span><?php echo $client_name ?></span>
                </div>
                <div class="breakdown-column">
                    <span class="subhead">TEAM CREDITS</span>
                    <div><?php echo $team_credits; ?></div>
                </div>
            </div>
            <div class="column">
                <div class="breakdown-column">
                    <span class="subhead">TOOLS USED</span>
                    <div  id="tools"><?php echo $tools_used; ?></div>
                </div>
                <div class="breakdown-column">
                    <span class="subhead">CONTACT US</span>
                    <span><?php echo $contact_us?></span>
                    <!-- //add button here/ -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
