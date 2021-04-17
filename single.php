<?php get_header(); ?>
<section class="ly_section">
    <div class="ly_section_inner">
        <?php
        if (have_posts() ):
            while (have_posts() ): the_post();
            ?>
        <div class="bl_tit">
            <h2 class=el_lv2Heading><?php the_title(); ?></h2>
            <div class="bl_tit_date"><?php the_date(); ?></div>
        </div>
        <div class="bl_cont"><?php the_content(); ?></div>
            <?php
            endwhile;
        endif;
        //制作項目
        if (is_object_in_term($post->ID, 'design') ):
            get_template_part('template-parts/single-production');
        endif;
        ?>
        <!--ページネーション-->
        <div class="bl_pagination">
            <div class="bl_pagination_prev"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i> %title'); ?></div>
            <div class="bl_pagination_next"><?php next_post_link('%link', '%title <i class="fas fa-angle-right"></i>'); ?></div>
        </div>
    </div><!--/.lu_section_inner-->
</section>
<?php get_footer();
