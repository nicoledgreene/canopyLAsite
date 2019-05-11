<?php
    function debugToConsole($msg) { 
        echo "<script>console.log(".json_encode($msg).")</script>";
    }

    //TODO update this on publish
    // $host = '';
    $host = '/wordpress';

    $commercialLinks = array();
    $filmLinks = array();
    $videoGameLinks = array();
    $immersiveLinks = array();

    $nav_links = get_field('nav_links', 29);
    if( have_rows('nav_links', 29) ):
        while ( have_rows('nav_links', 29) ) : the_row();
            $object = new stdClass();
            $object->text = get_sub_field('nav_link_text', 29);
            $object->url = get_sub_field('nav_link_url', 29);
            if(get_sub_field('parent_link', 29) == 'commercial')
                array_push($commercialLinks, $object)
            ;
            else if(get_sub_field('parent_link', 29) == 'film')
                array_push($filmLinks, $object)
            ;
            else if(get_sub_field('parent_link', 29)== 'video_game')
                array_push($videoGameLinks, $object)
            ;
            else if(get_sub_field('parent_link', 29) == 'immersive_experience')
                array_push($immersiveLinks, $object)
            ;
        endwhile;
    else: 
        debugToConsole('no rows found for top nav links');
    endif;

    if(get_field('grid_image_1', 29)) {
        $grid_img_1 = get_field('grid_image_1', 29);
    }
    else {
        $grid_img_1 =  $host . '/images/placeholder/clips1.png';
    }
    if(get_field('grid_image_2', 29)) {
        $grid_img_2 = get_field('grid_image_2', 29);
    }
    else {
        $grid_img_2 =  $host . '/images/placeholder/clips2.png';
    }
    if(get_field('grid_image_3', 29)) {
        $grid_img_3 = get_field('grid_image_3', 29);
    }
    else {
        $grid_img_3 =  $host . '/images/placeholder/clips3.png';
    }
    if(get_field('grid_image_4', 29)) {
        $grid_img_4 = get_field('grid_image_4', 29);
    }
    else {
        $grid_img_4 =  $host . '/images/placeholder/clips4.png';
    }
    if(get_field('grid_image_5', 29)) {
        $grid_img_5 = get_field('grid_image_5', 29);
    }
    else {
        $grid_img_5 =  $host . '/images/placeholder/clips5.png';
    }
    if(get_field('grid_image_6', 29)) {
        $grid_img_6 = get_field('grid_image_6', 29);
    }
    else {
        $grid_img_6 =  $host . '/images/placeholder/clips6.png';
    }
    if(get_field('grid_image_7', 29)) {
        $grid_img_7 = get_field('grid_image_7', 29);
    }
    else {
        $grid_img_7 =  $host . '/images/placeholder/clips7.png';
    }
    if(get_field('grid_image_8', 29)) {
        $grid_img_8 = get_field('grid_image_8', 29);
    }
    else {
        $grid_img_8 =  $host . '/images/placeholder/clips8.png';
    }
    if(get_field('grid_image_9', 29)) {
        $grid_img_9 = get_field('grid_image_9', 29);
    }
    else {
        $grid_img_9 =  $host . '/images/placeholder/clips9.png';
    }

    $gridImages = array($grid_img_1, $grid_img_2, $grid_img_3, $grid_img_4, $grid_img_5, $grid_img_6, $grid_img_7, $grid_img_8, $grid_img_9);

    if(get_field('grid_link_1', 29)) {
        $grid_link_1 = get_field('grid_link_1', 29);
    }
    else {
        $grid_link_1 =  '/';
    }
    if(get_field('grid_link_2', 29)) {
        $grid_link_2 = get_field('grid_link_2', 29);
    }
    else {
        $grid_link_2 =  '/';
    }
    if(get_field('grid_link_3', 29)) {
        $grid_link_3 = get_field('grid_link_3', 29);
    }
    else {
        $grid_link_3 =  '/';
    }
    if(get_field('grid_link_4', 29)) {
        $grid_link_4 = get_field('grid_link_4', 29);
    }
    else {
        $grid_link_4 =  '/';
    }
    if(get_field('grid_link_5', 29)) {
        $grid_link_5 = get_field('grid_link_5', 29);
    }
    else {
        $grid_link_5 =  '/';
    }
    if(get_field('grid_link_6', 29)) {
        $grid_link_6 = get_field('grid_link_6', 29);
    }
    else {
        $grid_link_6 =  '/';
    }
    if(get_field('grid_link_7', 29)) {
        $grid_link_7 = get_field('grid_link_7', 29);
    }
    else {
        $grid_link_7 = '/';
    }
    if(get_field('grid_link_8', 29)) {
        $grid_link_8 = get_field('grid_link_8', 29);
    }
    else {
        $grid_link_8 = '/';
    }
    if(get_field('grid_link_9', 29)) {
        $grid_link_9 = get_field('grid_link_9', 29);
    }
    else {
        $grid_link_9 = '/';
    }

    $gridLinks = array($grid_link_1, $grid_link_2, $grid_link_3, $grid_link_4, $grid_link_5, $grid_link_6, $grid_link_7, $grid_link_8, $grid_link_9);

    if(get_field('feature_header', 29)) {
        $feature_header = get_field('feature_header', 29);
    }
    else {
        $feature_title = 'Feature Title';
    }
    if(get_field('feature_text', 29)) {
        $feature_text = get_field('feature_text', 29);
    }
    else {
        $feature_text = 'Feature Text';
    }
    if(get_field('feature_image', 29)) {
        $feature_image = get_field('feature_image', 29);
    }
    else {
        $feature_image = 'Feature Image';
    }
    if(get_field('feature_link', 29)) {
        $feature_link = get_field('feature_link', 29);
    }
    else {
        $feature_link = '/';
    }
?>