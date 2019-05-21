<?php get_header(); ?>
<!-- /*
Template Name: Homepage
*/ -->

<?php include 'variables.php' ?>

<script>
    //grid stuff
    function revealOverlay(index) {
        const item = '#overlay-'+index.toString();
        $(item).removeClass('hidden-overlay');
    }
    function removeOverlay(index) {
        const item = '#overlay-'+index.toString();
        $(item).addClass('hidden-overlay');
    }
</script>

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
            <h1 class="hidden-title">CANOPY LA</h1>
            <div class="main-menu">
                <div>
                    <img id="title-logo" src="<?php echo $host . '/images/logos/CANOPY_LOGO_ai_FULL_WHT.png' ?>">
                    <img id="title-small-logo" class="hidden" src="<?php echo $host . '/wp-content/uploads/2019/04/small-logo.png' ?>">
                </div>
                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <div class="home-nav">
                    <div class="about-div">
                        <span class="parent-link" id="nav1" onClick="location.href='<?php echo $host?>/about'">ABOUT</span>
                    </div>
                    <div class="expandable-nav">
                        <span class="parent-link" id="nav3" onClick="sendEmail()">CONTACT</span>
                        <span class="parent-link" id="nav2" class="projects-link">PROJECTS</span>
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
            <div class="main-features">
                <div class="active-feature">
                    <span>Bagdley Mischka</span>
                    <span>Interactive Fashion Experience</span>
                    <span>Sound | Music | Install</span>
                </div>
                <div class="feat-select">
                    <span class="diagonal-strikethrough">01</span>
                    <span>02</span>
                    <span>03</span>
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
            </div>
            <div class="grid-container">
                <div class="grid"> 
                    <?php $index = -1;
                        foreach($grid as $item) {
                            $index+=1;
                            $revealClass='';
                            if($index == 2 || $index == 5 || $index == 8 || $index == 11 || $index == 14 || $index == 17 || $index == 20 || $index == 23 || $index == 26 || $index == 29 || $index == 32 ||$index == 35 ||$index == 38 ||$index == 41) {
                                $revealClass = 'grid-box-3';
                            }
                            else if($index == 1 || $index == 4 || $index == 7 || $index == 10 || $index == 13 || $index == 16 || $index == 19 || $index == 22 || $index == 25 || $index == 28 || $index == 31 ||$index == 34 ||$index == 37 ||$index == 40) {
                                $revealClass = 'grid-box-2';
                            }
                            else {
                                $revealClass = 'grid-box-1';
                            }
                                echo "<div class='resize-box ";
                                echo $revealClass;
                                echo "'><div class='grid-item' onmouseenter='revealOverlay(";
                                echo $index;
                                echo ")' onmouseleave='removeOverlay(";
                                echo $index;
                                echo")' onClick=\"location.href='";
                                echo $item->link;
                                echo  "'\"><div class='grid-item-overlay hidden-overlay' ";
                                echo "id='overlay-";
                                echo $index;
                                echo "'><span>";
                                echo $item->hover_title;
                                echo "</span><span>";
                                echo $item->client;
                                echo "</span><span>";
                                echo $item->category;
                                echo "</span></div>";
                                echo "<div class='grid-item-content'><img src='";
                                echo $item->image;
                                echo "'></div></div></div>";
                            }
                    ?>
                </div>
            </div>    
        </div>

        <div class="feature">
            <div class="feat-arrow-previous">
                <i class="fa fa-chevron-left"></i>                
            </div>
            <div class="feat-content">
                <div class="feat-img">
                </div>
                <div class="feat-text">
                    <span>PRESS</span>
                    <span>A VR Acid Trip is All the Fun Without the Pesky Come Down</span>
                    <span>Wired | April 22, 2019</span>
                    <div class="feat-link">
                        <span>LEARN MORE</span>
                    </div>
                </div>
            </div>
            <div class="feat-arrow-next">
                <i class="fa fa-chevron-right"></i>                
            </div>
        </div>

        <?php get_footer(); ?>
