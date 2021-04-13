<?php get_header(); ?>
<!--profile section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <?php
        if (have_posts() ):
            while( have_posts() ): the_post();
            ?>
        <h2 class=el_lv2Heading><?php the_title(); ?></h2>
        <div class="bl_cont"><?php the_content(); ?></div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<!--footer-->
<?php get_footer(); 