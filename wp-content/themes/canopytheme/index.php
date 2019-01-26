<?php get_header(); ?>

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
                    <img id="title-logo" src="/wordpress/images/logos/CANOPY_LOGO_ai_FULL_WHT.png">
                </div>
                <ul class="nav">
                    <li>
                        <span id="nav1">ABOUT</span>
                    </li>
                    <li>
                        <span class="projects-link" id="nav2">PROJECTS</span>
                        <div class="projects-sub-list">
                            <span id="nav3">COMMERCIAL</span>
                            <span id="nav4">FILM</span>
                            <span id="nav5">VIDEO GAME</span>
                            <span id="nav6">IMMERSIVE EXPERIENCE</span>
                        </div>
                    </li>
                    <li>
                        <span id="nav7">GEAR & PROCESS</span>
                    </li>
                    <li>
                        <span id="nav8">STORE</span>
                    </li>
                </ul>
            </div>
            <!-- <div class="coming-soon">
                <a href="mailto:yo@canopy-la.com?Subject=Hello%20there" target="_top" class="coming-soon-text">yo@canopy-la.com</a >
            </div> -->
        </div>
        <div class="main">
            <div id="wave">
                <img src="/wordpress/images/backgrounds/waves.png">
            </div>
            <div class="body-header">
                <h3>Canopy LA</h3>
                <span>sound + music + immersion</span>
                <a>LEARN MORE</a>
            </div>
            <div class="grid-container">
                <div class="grid">
                    <div class="grid-row">
                        <div id="g1" class="grid-item-1">
                            <div id="o1" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips1.png">
                        </div>
                        <div id="g2" class="grid-item-2">
                            <div id="o2" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips2.png">
                        </div>
                        <div id="g3" class="grid-item-3">
                            <div id="o3" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips3.png">
                        </div>
                    </div>
                    <div class="grid-row">
                        <div id="g4" class="grid-item-1">
                            <div id="o4" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips4.png">
                        </div>
                        <div id="g5" class="grid-item-2">
                            <div id="o5" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips5.png">
                        </div>
                        <div id="g6" class="grid-item-3">
                            <div id="o6" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips6.png">
                        </div>
                    </div>
                    <div class="grid-row">
                        <div id="g7" class="grid-item-1">
                            <div id="o7" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips7.png">
                        </div>
                        <div id="g8" class="grid-item-2">
                            <div id="o8" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips8.png">
                        </div>
                        <div id="g9" class="grid-item-3">
                            <div id="o9" class="grid-item-overlay hidden">
                                <span>PROJECT INFO</span>
                            </div>
                            <img src="/wordpress/images/placeholder/clips9.png">
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="feature">
            <div class="focus-image"></div>
            <div class="focus-text">
                <span class="focus-heading">BEHIND THE SCENES</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis scelerisque nisi, sit amet sollicitudin tortor interdum a. Vestibulum vehicula dui lacus, vel mollis erat pharetra a. </span>
                <div class="focus-button">
                    <span>LEARN MORE</span>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>
