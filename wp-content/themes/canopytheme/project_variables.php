<?php
    $host = '/wordpress';

    if(get_field('project_video_link')) {
        $video_link = get_field('project_video_link');
    }

    $sliderImages = array();

    if(get_field('slider_image_1')) {
        $slider_img_1 = get_field('slider_image_1');
        array_push($sliderImages, $slider_img_1);
    }
    if(get_field('slider_image_2')) {
        $slider_img_2 = get_field('slider_image_2');
        array_push($sliderImages, $slider_img_2);
    }
    if(get_field('slider_image_3')) {
        $slider_img_3 = get_field('slider_image_3');
        array_push($sliderImages, $slider_img_3);
    }
    if(get_field('slider_image_4')) {
        $slider_img_4 = get_field('slider_image_4');
        array_push($sliderImages, $slider_img_4);
    }
    if(get_field('slider_image_5')) {
        $slider_img_5 = get_field('slider_image_5');
        array_push($sliderImages, $slider_img_5);
    }
    if(get_field('slider_image_6')) {
        $slider_img_6 = get_field('slider_image_6');
        array_push($sliderImages, $slider_img_6);
    }
    if(get_field('slider_image_7')) {
        $slider_img_7 = get_field('slider_image_7');
        array_push($sliderImages, $slider_img_7);
    }
    if(get_field('slider_image_8')) {
        $slider_img_8 = get_field('slider_image_8');
        array_push($sliderImages, $slider_img_8);
    }
    if(get_field('slider_image_9')) {
        $slider_img_9 = get_field('slider_image_9');
        array_push($sliderImages, $slider_img_9);
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
