<!--footer-->
<footer class="ly_footer">
    <div class="ly_footer_inner">
        <!--footer nav-->
        <?php
        $args = array(
            'theme_location' => 'footer_nav',
            'container' => 'nav',
            'menu_class' => 'bl_footerNav',
        );
        wp_nav_menu($args);
        ?>
        <small class="el_copyRight">©︎ N-Design All rights reserved.</small>
    </div>
    <!--/.ly_footer_inner-->
</footer>
<?php wp_footer(); ?>
</body>

</html>