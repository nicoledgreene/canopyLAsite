<?php
/*
Template Name: Project Page With Video
*/
get_header();
?>

<div class="project-container">
    <video width="100%" height="auto" controls>
        <source src="https://youtu.be/5Peo-ivmupE" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="project-info-detail">
        <h4>Project Title</h4>
        <span>OBJECTIVE</span>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel auctor nulla, vitae faucibus ligula. Vestibulum semper ut augue in aliquet. Quisque id tristique nisi. Vestibulum pretium nec turpis ut consequat. Donec posuere viverra consequat. Pellentesque vitae ornare ipsum. Phasellus tristique, sapien sit amet scelerisque blandit, eros enim dictum purus, et volutpat est nunc at orci. Proin nunc enim, maximus id laoreet eu, condimentum eget elit. Mauris convallis quam non neque laoreet, et finibus leo accumsan. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin aliquam risus vel pulvinar sollicitudin. Curabitur sit amet erat vel urna egestas eleifend at quis urna. Donec arcu nisi, varius at luctus a, commodo ut nisi. Praesent at ultricies elit. Proin libero nulla, auctor sit amet mauris sed, consectetur placerat sem.
        </span>
        <div class="line"></div>
        <div class="project-breakdown">
            <div class="breakdown-column">
                <span>CLIENT</span>
                <span>Client name</span>
            </div>
            <div class="breakdown-column">
                <span>TEAM CREDITS</span>
                <span>Name - did this</span>
                <span>Name - did this</span>
                <span>Name - did this</span>
                <span>Name - did this</span>
            </div>
            <div class="breakdown-column">
                <span>TOOLS USED</span>
                <span>tool</span>
                <span>tool</span>
                <span>tool</span>
                <span>tool</span>
            </div>
            <div class="breakdown-column">
                <span>CONTACT US</span>
                <span>asd;lfkasjdl;f</span>
                <!-- //add button here/ -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
