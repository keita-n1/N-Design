<?php get_header(); ?>
<!--archive section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <h2 class="el_lv2Heading"><?php the_archive_title(); ?></h2>
        <div class="bl_cardUnit_3col">
            <?php get_template_part('template-parts/loop-archive'); ?>
        </div>
        <!--/.bl_cardUnit_3col-->
    </div>
    <!--/.ly_section_inner-->
</section>
<?php get_footer();
