<?php
/*
Template Name: Project Page With Video
*/
get_header();
?>

<?php
    $host = '/wordpress';

    if(get_field('project_video_link')) {
        $video_link = get_field('project_video_link');
    }
    if(get_field('project_title')) {
        $project_title = get_field('project_title');
    }
    if(get_field('project_subtitle')) {
        $project_subtitle = get_field('project_subtitle');
    }
    if(get_field('project_description')) {
        $project_description = get_field('project_description');
    }
    if(get_field('client_name')) {
        $client_name = get_field('client_name');
    }
    if(get_field('team_credits')) {
        $team_credits = get_field('team_credits');
    }
    if(get_field('tools_used')) {
        $tools_used = get_field('tools_used');
    }
    if(get_field('contact_us')) {
        $contact_us = get_field('contact_us');
    }
?>

<div class="project-container">
    <div class="videoWrapper">
        <?php echo $video_link ?>
    </div>
    <div class="project-info-detail">
        <h4><?php echo $project_title ?></h4>
        <span class="proj-subtitle"><?php echo $project_subtitle ?></span>
        <div id="proj-desc">
            <?php echo $project_description; ?>
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
