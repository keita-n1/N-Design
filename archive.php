<?php get_header(); ?>
<!--archive section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <h2 class="el_lv2Heading"><?php the_archive_title(); ?></h2>
        <div class="bl_cardUnit_3col">
            <?php
            if (have_posts() ):
                while (have_posts() ): the_post();
                ?>
            <a class="bl_cardUnit" href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail() ): the_post_thumbnail(); endif; ?>
                <h3 class="el_lv3Heading"><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
            </a>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <!--/.bl_cardUnit_3col-->
    </div>
    <!--/.ly_section_inner-->
</section>
<?php get_footer();
