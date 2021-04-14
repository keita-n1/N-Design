<?php
$works_query = new_query();
if ($works_query->have_posts() ):
    while ($works_query->have_posts() ): $works_query->the_post();
        ?>
        <a class="bl_cardUnit" href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail() ):
                the_post_thumbnail('large');
            else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noImg.png" alt="">
            <?php endif; ?>
            <h3 class="el_lv3Heading"><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </a>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
