<?php get_header(); ?>
<!-- /*
Template Name: Homepage
*/ -->

<?php include 'variables.php' ?>

<body>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-header">
        <div class="date"><?php the_time( 'M j y' ); ?></div>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="author"><?php the_author(); ?></div>
        </div><!--end post header-->
        <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?> </div>
        <!--end entry-->
        <div class="post-footer">
        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
        </div><!--end post footer-->
        </div><!--end post-->
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
        <div class="navigation index">
        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
        </div><!--end navigation-->
    <?php else : ?>
    <?php endif; ?>

    <div class="container">
        <div class="hero">
            <div class="blur"></div>
            <h1>CANOPY LA</h1>
            <div class="main-menu">
                <div>
                    <img id="title-logo" src="<?php echo $host . '/images/logos/CANOPY_LOGO_ai_FULL_WHT.png' ?>">
                </div>
                <ul class="nav">
                    <li>
                        <span id="nav1" onClick="location.href='<?php echo $host?>/about'">ABOUT</span>
                    </li>
                    <li>
                        <span class="projects-link" id="nav2" onClick="document.location.href='#gridNav'">PROJECTS</span>
                        <!-- <div class="projects-sub-list">
                            <span id="nav3">COMMERCIAL</span>
                            <span id="nav4">FILM</span>
                            <span id="nav5">VIDEO GAME</span>
                            <span id="nav6">IMMERSIVE EXPERIENCE</span>
                        </div> -->
                    </li>
                    <!-- <li>
                        <span id="nav7">GEAR & PROCESS</span>
                    </li> -->
                    <!-- <li>
                        <span id="nav8">STORE</span>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main">
            <div id="wave">
                <img src="<?php echo $host . '/images/backgrounds/waves.png' ?>">
            </div>
            <div id="gridNav" class="body-header">
                <h3>Canopy LA</h3>
                <span>sound + music + immersion</span>
                <a>LEARN MORE</a>
            </div>
            <div class="grid-container">
                <div class="grid"> 
                    <div class="grid-row">
                        <div id="g1" class="grid-item-1">
                            <div id="o1" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[0]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[0]["url"] ?>">
                        </div>
                        <div id="g2" class="grid-item-2">
                            <div id="o2" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[1]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[1]["url"] ?>">
                        </div>
                        <div id="g3" class="grid-item-3">
                            <div id="o3" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[2]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[2]["url"] ?>">
                        </div>
                    </div>
                    <div class="grid-row">
                        <div id="g4" class="grid-item-1">
                            <div id="o4" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[3]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[3]["url"] ?>">                            
                        </div>
                        <div id="g5" class="grid-item-2">
                            <div id="o5" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[4]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[4]["url"] ?>">
                        </div>
                        <div id="g6" class="grid-item-3">
                            <div id="o6" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[5]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[5]["url"] ?>">
                        </div>
                    </div>
                    <div class="grid-row">
                        <div id="g7" class="grid-item-1">
                            <div id="o7" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[6]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[6]["url"] ?>">
                        </div>
                        <div id="g8" class="grid-item-2">
                            <div id="o8" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[7]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[7]["url"] ?>">
                        </div>
                        <div id="g9" class="grid-item-3">
                            <div id="o9" class="grid-item-overlay hidden">
                                <span><?php echo $gridImages[8]["description"] ?></span>
                            </div>
                            <img src="<?php echo $gridImages[8]["url"] ?>">
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="feature">
            <div class="focus-image">
                <img src="<?php echo $feature_image ?>" />
            </div>
            <div class="focus-text">
                <span id="focus-header" class="focus-heading"><?php echo $feature_header ?></span>
                <span><?php echo $feature_text ?></span>
                <div class="focus-button" onClick="document.location.href='<?php echo trim($host) ?>' + '<?php echo trim($feature_link) ?>'">
                    <span>LEARN MORE</span>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>
