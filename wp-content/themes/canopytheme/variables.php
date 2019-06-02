<?php
    function debugToConsole($msg) { 
        echo "<script>console.log(".json_encode($msg).")</script>";
    }

    //TODO update this on publish
    $host = '';
    // $host = '/wordpress';

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

    $hero_projects = array();
    if( have_rows('hero_projects', 29) ):
        while ( have_rows('hero_projects', 29) ) : the_row();
            $object = new stdClass();
            $object->desktop_image = get_sub_field('desktop_image', 29);
            $object->mobile_image = get_sub_field('mobile_image', 29);
            $object->client_name = get_sub_field('client_name', 29);
            $object->title = get_sub_field('title', 29);
            $object->subtitle = get_sub_field('subtitle', 29);
            $object->url = get_sub_field('url', 29);
            array_push($hero_projects, $object);
        endwhile;
    else: 
        debugToConsole('no rows found for hero_projects');
    endif;

    $grid = array();
    if(have_rows('homepage_grid', 29)):
        while ( have_rows('homepage_grid', 29) )  : the_row();
            $object = new stdClass();
            $object->image = get_sub_field('image', 29);
            $object->link = get_sub_field('link', 29);
            $object->hover_title = get_sub_field('hover_title', 29);
            $object->client = get_sub_field('client', 29);
            if(get_sub_field('category', 29)== 'video_game')
                $object->category = 'Video Game'
            ;
            else if (get_sub_field('category', 29)== 'commercial')
                $object->category = 'Commercial'
            ;
            else if (get_sub_field('category', 29)== 'film')
                $object->category = 'Film'
            ;
            else if (get_sub_field('category', 29)== 'immersive_experience')
                $object->category = 'Immersive Experience'
            ;
            array_push($grid, $object);
        endwhile;
    else:
        debugToConsole('no rows found for grid');
    endif;

    //Press
    $press_links = array();
    if( have_rows('press_links', 29) ):
        while ( have_rows('press_links', 29) ) : the_row();
            $object = new stdClass();
            $object->image = get_sub_field('image', 29);
            $object->headline = get_sub_field('headline', 29);
            $object->subtitle = get_sub_field('subtitle', 29);
            $object->link_title = get_sub_field('link_title', 29);
            $object->url = get_sub_field('url', 29);
            array_push($press_links, $object);
        endwhile;
    else: 
        debugToConsole('no rows found for press_links');
    endif;





    //feature
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