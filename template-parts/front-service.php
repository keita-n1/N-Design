<div class="bl_cardUnit_3col">
    <div class="bl_cardUnit bl_cardUnit__service">
        <figure class="bl_cardUnit_img">
            <?php if (get_field('img')) : ?>
                <img src="<?php the_field('img'); ?>" alt="webdesign">
            <?php endif; ?>
        </figure>
        <p class="bl_cardUnit_txt"><?php the_field('text'); ?></p>
    </div>
    <!--/.bl_cardUnit-->
    <div class="bl_cardUnit bl_cardUnit__service">
        <figure class="bl_cardUnit_img bl_cardUnit_img__cording">
            <?php if (get_field('img2')) : ?>
                <img src="<?php the_field('img2'); ?>" alt="cording">
            <?php endif; ?>
        </figure>
        <p class="bl_cardUnit_txt"><?php the_field('text2'); ?></p>
    </div>
    <!--/.bl_cardUnit-->
    <div class="bl_cardUnit bl_cardUnit__service">
        <figure class="bl_cardUnit_img">
            <?php if (get_field('img3')) : ?>
                <img src="<?php the_field('img3'); ?>" alt="wordpress">
            <?php endif; ?>
        </figure>
        <p class="bl_cardUnit_txt"><?php the_field('text3'); ?></p>
    </div>
    <!--/.bl_cardUnit-->
</div>
<!--/.bl_cardUnit_3col-->