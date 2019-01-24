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
                        <span>ABOUT</span>
                    </li>
                    <li>
                        <span class="projects-link">PROJECTS</span>
                        <div class="projects-sub-list">
                            <span>COMMERCIAL</span>
                            <span>FILM</span>
                            <span>VIDEO GAME</span>
                            <span>IMMERSIVE EXPERIENCE</span>
                        </div>
                    </li>
                    <li>
                        <span>GEAR & PROCESS</span>
                    </li>
                    <li>
                        <span>STORE</span>
                    </li>
                </ul>
            </div>
            <!-- <div class="coming-soon">
                <a href="mailto:yo@canopy-la.com?Subject=Hello%20there" target="_top" class="coming-soon-text">yo@canopy-la.com</a >
            </div> -->
        </div>
        <div class="main">
            <div id="wave">
                <img src="/images/backgrounds/waves.png">
            </div>
            <div class="body-header">
                <h3>Canopy LA</h3>
                <span>sound + music + immersion</span>
                <a>LEARN MORE</a>
            </div>
            <div class="grid-container">
                <div class="grid">
                    <div class="grid-row">
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                    </div>
                    <div class="grid-row">
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                    </div>
                    <div class="grid-row">
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                        <div>
                            <img src="https://picsum.photos/1000">
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="feature">
            <div class="focus-image"></div>
            <div class="focus-text">
                <span class="focus-heading">BEHIND THE SCENES</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis scelerisque nisi, sit amet sollicitudin tortor interdum a. Vestibulum vehicula dui lacus, vel mollis erat pharetra a. Ut tempor, arcu eget porttitor aliquam, enim nisi blandit eros, eget pretium risus purus sit amet augue. Vivamus ac rutrum mauris, id hendrerit nulla. Sed sagittis gravida nisi vitae dapibus.
                </span>
                <div class="focus-button">
                    <span>LEARN MORE</span>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>
