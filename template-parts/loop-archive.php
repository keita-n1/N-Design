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
    endwhile; else:?>
    <article>
        <p>該当の記事はありません</p>
    </article>
<?php endif;
?>