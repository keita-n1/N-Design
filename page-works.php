<?php get_header(); ?>
<!--works section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <h2 class="el_lv2Heading">Works</h2>
        <div class="bl_cardUnit_3col">
            <?php
            $args = [
                'orderby' => 'ID',
            ];
            $terms = get_terms('design', $args);
            foreach ($terms as $term):
            ?>
            <a class="bl_cardUnit bl_cardUnit__gold" href="<?php echo get_term_link($term); ?>">
                <?php
                $image_id = get_field('img', $term->taxonomy. '_'. $term->term_id);
                echo wp_get_attachment_image($image_id, 'large');
                ?>
                <p class="bl_cardUnit_tit"><?php echo $term->name; ?></p>
            </a>
            <?php
            endforeach;
            ?>
        </div><!--/.bl_cardUnit_3col-->
    </div><!--/.ly_section_inner-->
</section>
<?php get_footer(); ?>