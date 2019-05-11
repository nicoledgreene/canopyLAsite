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
                <div>
                    <div class="home-nav">
                        <div class="about-div">
                            <span class="parent-link" id="nav1" onClick="location.href='<?php echo $host?>/about'">ABOUT</span>
                        </div>
                        <!-- onClick="document.location.href='#gridNav'" -->
                        <div class="expandable-nav">
                            <div class="flex-row">
                                <span class="parent-link" id="nav2" class="projects-link">PROJECTS</span>
                                <span class="parent-link" id="nav3" onClick="location.href='<?php echo $host?>/contact'">CONTACT</span>
                            </div>
                            <div id="projects-sub-nav" class="hidden">
                                <div class="sub-nav-item">
                                    <span class="sub-nav-item-title" id="commercialToggle">COMMERCIAL</span>
                                    <div class="hidden sub-project-links" id="commercialSub">
                                    <?php $index = 0;
                                        foreach($commercialLinks as $item) {
                                            $index+=1;
                                            $link = $host . $item->url;
                                            if(($index % 2)==0) {
                                                echo '<span class=\'project-nav-link even-link\' onClick="location.href=\'';
                                                echo $link;
                                                echo '\'">+ ';
                                            }
                                            else {
                                                echo '<span class=\'project-nav-link odd-link\' onClick="location.href=\'';
                                                echo $link;
                                                echo '\'">+ ';
                                            }
                                            echo $item->text;
                                            echo "</span>";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div class="sub-nav-item">
                                    <span class="sub-nav-item-title" id="filmToggle">FILM</span>
                                    <div class="hidden sub-project-links" id="filmSub">
                                    <?php 
                                        $index = 0;
                                        foreach($filmLinks as $item) {
                                            $index+=1;
                                            $link = $host . $item->url;
                                            if(($index % 2)==0) {
                                                echo '<span class=\'project-nav-link even-link\' onClick="location.href=\'';
                                                echo $link;
                                                echo '\'">+ ';
                                            }
                                            else {
                                                echo '<span class=\'project-nav-link odd-link\' onClick="location.href=\'';
                                                echo $link;
                                                echo '\'">+ ';
                                            }
                                            echo $item->text;
                                            echo "</span>";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div class="sub-nav-item">
                                    <span class="sub-nav-item-title" id="videoGameToggle">VIDEO GAME</span>
                                    <div class="hidden sub-project-links" id="videoGameSub">
                                    <?php 
                                        $index = 0;
                                        foreach($videoGameLinks as $item) {
                                            $index+=1;
                                            $link = $host . $item->url;
                                            if(($index % 2)==0) {
                                                echo '<span class=\'project-nav-link even-link\' onClick="location.href=\'';
                                                echo $link;
                                                echo '\'">+ ';
                                            }
                                            else {
                                                echo '<span class=\'project-nav-link odd-link\' onClick="location.href=\'';
                                                echo $link;
                                                echo '\'">+ ';
                                            }
                                            echo $item->text;
                                            echo "</span>";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div class="sub-nav-item">
                                    <span class="sub-nav-item-title" id="immersiveToggle">IMMERSIVE EXPERIENCE</span>
                                    <div class="hidden sub-project-links" id="immersiveSub">
                                    <?php 
                                        $index = 0;
                                        foreach($immersiveLinks as $item) {
                                            $index+=1;
                                            if(($index % 2)==0) {
                                                echo "<span class='project-nav-link even-link'>+ ";
                                            }
                                            else {
                                                echo "<span class='project-nav-link odd-link'>+ ";
                                            }
                                            echo $item->text;
                                            echo "</span>";
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tag-line flex-column">
            <span>We are all things sound, music, and immersion.</span>
            <div class="link-div">
                <a>LEARN MORE</a>
            </div>
        </div>
        <div class="main">
            <div id="gridNav" class="body-header">
                <h3>Our Work</h3>
                <!-- <span>sound + music + immersion</span>
                <a>LEARN MORE</a> -->
            </div>
            <div class="grid-container">
                <div class="grid"> 
                    <?php 
                        foreach($gridImages as $key=>$image) {
                            echo "<img class='grid-item src=";
                            echo $image["url"];
                            echo "> ";
                        }
                    ?>
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
