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
