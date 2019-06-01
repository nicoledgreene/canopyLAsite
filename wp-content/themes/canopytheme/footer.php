<?php
    // $host = '';
    $host = '/wordpress';
?>

    <footer>
        <div class="footer-row">
            <div class="flex-row">
                <a class="small-logo" href="/"><img src="<?php echo $host . '/wp-content/uploads/2019/04/small-logo.png' ?>"></a>
            </div>
            <div class="flex-row">
                <!-- <div class="flex-column footer-links">
                    <span>ABOUT</span>
                    <span>PROJECTS</span>
                    <span>CONTACT</span>
                </div> -->
                <div class="flex-column social">
                    <div #social-icons>
                        <i onClick="openFb()" class="fa fa-facebook-square"></i>
                        <i onClick="openIg()" class="fa fa-instagram"></i>
                        <!-- <i id="tw-link" class="fa fa-twitter"></i> -->
                        <i onClick="openVi()" class="fa fa-vimeo-v"></i>
                    </div>
                <div>
                <div id='copyright'>
                    <span>COPYRIGHT.</span>
                    <span>ALL RIGHTS RESERVED</span>
                </div>
            <div>
        </div>

    </footer>

</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
