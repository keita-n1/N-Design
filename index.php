<?php get_header(); ?>
<!--mainImg-->
<img class="bl_mainImg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main-img.jpg" alt="メインイメージ">
<!--service section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <h2 class="el_lv2Heading">Service</h2>
        <div class="bl_cardUnit_3col">
            <div class="bl_cardUnit bl_cardUnit__service">
                <figure class="bl_cardUnit_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/webDesign-text.png" alt="webdesign">
                </figure>
                <p class="bl_cardUnit_txt">用途に応じたデザインを作成いたします。スマートフォン、タブレットからでも見やすいレスポンシブデザインも対応可能です。</p>
            </div>
            <!--/.bl_cardUnit-->
            <div class="bl_cardUnit bl_cardUnit__service">
                <figure class="bl_cardUnit_img bl_cardUnit_img__cording">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cording-text.png" alt="cording">
                </figure>
                <p class="bl_cardUnit_txt">JavaScriptやjQueryを使用した動きのあるWebサイトなど、様々なサイトのコーディングを行っています。</p>
            </div>
            <!--/.bl_cardUnit-->
            <div class="bl_cardUnit bl_cardUnit__service">
                <figure class="bl_cardUnit_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wordpress-text.png" alt="wordpress">
                </figure>
                <p class="bl_cardUnit_txt">WordPressを使用した、編集・更新のしやすいWebサイトを制作いたします。</p>
            </div>
            <!--/.bl_cardUnit-->
        </div>
        <!--/.bl_cardUnit_3col-->
    </div>
    <!--/.ly_section_inner-->
</section>
<!--works section-->
<section class="ly_section">
    <div class="ly_section_inner">
        <h2 class="el_lv2Heading">Works</h2>
        <div class="bl_cardUnit_3col">
            <a class="bl_cardUnit" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noImg.png" alt="">
                <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                <p>excerpt</p>
            </a>
            <a class="bl_cardUnit" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noImg.png" alt="">
                <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                <p>excerpt</p>
            </a>
            <a class="bl_cardUnit" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noImg.png" alt="">
                <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                <p>excerpt</p>
            </a>
            <a class="bl_cardUnit" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noImg.png" alt="">
                <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                <p>excerpt</p>
            </a>
            <a class="bl_cardUnit" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noImg.png" alt="">
                <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                <p>excerpt</p>
            </a>
            <a class="bl_cardUnit" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noImg.png" alt="">
                <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                <p>excerpt</p>
            </a>
        </div>
        <!--/.bl_cardUnit_3col-->
        <div class="ly_btn">
            <button class="el_btn">more</button>
        </div>
    </div>
    <!--/.ly_section_inner-->
</section>
<?php get_footer();