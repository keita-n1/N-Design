<?php get_header(); ?>
<!--mainImg-->
<div class="bl_mainImg_wrapper">
    <img class="bl_mainImg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main-img.jpg" alt="メインイメージ">
    <h1 class="bl_mainImg_tit"><?php bloginfo('description'); ?></h1>
    <div class="bl_mainImg_scroll"><span>Scroll</span></div>
</div>
<!--service section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <?php
        if (have_posts() ):
            while (have_posts() ): the_post();
            ?>
        <h2 class="el_lv2Heading"><?php the_title(); ?></h2>
            <?php
            endwhile;
        endif;
        get_template_part('template-parts/front-service');
        ?>
    </div><!--/.ly_section_inner-->
</section>
<!--works section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <h2 class="el_lv2Heading">
            <?php
            $works_object = get_page_by_path('Works');
            echo $works_object->post_title;
            ?>
        </h2>
        <div class="bl_cardUnit_3col">
            <?php get_template_part('template-parts/loop-works'); ?>
        </div><!--/.bl_cardUnit_3col-->
        <div class="ly_btn">
            <a href="<?php echo home_url('works'); ?>">
                <button class="el_btn">more</button>
            </a>
        </div>
    </div><!--/.ly_section_inner-->
</section>
<?php get_footer();