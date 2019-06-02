<?php if(is_home()) {
        $isHomePage = true;
    }
    else {
        $isHomePage = false;
    }
?>
<div class="main-menu
<?php if (is_page_template('projectpage.php')) { 
    echo ' hidden-on-desktop';
} ?>
<?php if (is_page_template('aboutpage.php')) {
    echo ' dark-nav';
} ?>
">
    <div>
        <img onClick="location.href='/'" id="title-logo" 
        <?php if($isHomePage === false) {  
            echo 'class="hidden"';
        } ?>
        src="<?php echo $host . '/wp-content/uploads/2019/06/CANOPY_LOGO_ai_FULL_WHT.png' ?>">
        <img onClick="location.href='/'" id="title-small-logo" class="
        <?php if($isHomePage === true) {
            echo 'hidden';
        } ?>
        " src="<?php echo $host . '/wp-content/uploads/2019/04/small-logo.png' ?>">
    </div>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="home-nav">
        <div class="parent-nav-links
        <?php if($isHomePage === false) {
            echo " important-margin";
        } ?>
        ">
            <span class="parent-link" id="nav1" onClick="location.href='<?php echo $host?>/about'">
            ABOUT</span>
            <span class="parent-link" id="nav2" class="projects-link">PROJECTS</span>
            <span class="parent-link" id="nav3" onClick="sendEmail()">CONTACT</span>
        </div>
        <div class="expandable-nav hidden">
            <div class="sub-nav-item">
                <span class="sub-nav-item-title" id="commercialToggle">COMMERCIAL</span>
                <div class="hidden sub-project-links" id="commercialSub">
                <?php $index = 0;
                    foreach($commercialLinks as $item) {
                        $index+=1;
                        $link = $host . $item->url;
                        if(($index % 2)==0) {
                            echo '<span class=\'project-nav-link even-link\' onclick="location.href=\'';
                            echo $link;
                            echo '\'">+ ';
                        }
                        else {
                            echo '<span class=\'project-nav-link odd-link\' onclick="location.href=\'';
                            echo $link;
                            echo '\'">+ ';
                        }
                        echo $item->text;
                        echo "</span>";
                    }
                ?>
                </div>
            </div>
            <!-- <div class="sub-nav-item">
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
                        echo $link;
                        echo "</span>";
                    }
                ?>
                </div>
            </div> -->
            <div class="sub-nav-item">
                <span class="sub-nav-item-title" id="videoGameToggle">VIDEO GAME</span>
                <div class="hidden sub-project-links" id="videoGameSub">
                <?php 
                    $index = 0;
                    foreach($videoGameLinks as $item) {
                        $index+=1;
                        $link = $item->url;
                        if(($index % 2)==0) {
                            echo '<span class=\'project-nav-link even-link\' onclick="location.href=\'';
                            echo $link;
                            echo '\'">+ ';
                        }
                        else {
                            echo '<span class=\'project-nav-link odd-link\' onclick="location.href=\'';
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
                        $link = $item->url;
                        if(($index % 2)==0) {
                            echo '<span class=\'project-nav-link even-link\' onclick="location.href=\'';
                            echo $link;
                            echo '\'">+ ';
                        }
                        else {
                            echo '<span class=\'project-nav-link odd-link\' onclick="location.href=\'';
                            echo $link;
                            echo '\'">+ ';
                        }
                        echo $item->text;
                        echo "</span>";
                    }
                ?>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>