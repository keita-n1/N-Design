<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minmum-scale=1">
        <title>N-Design</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="style.css">
        <!--google-font-->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--header-->
        <div class="ly_header">
            <!--logo-->
            <a href="#"><img class="bl_headLogo" src="img/N-Design_logo.png" alt="logo"></a>
            <!--hamburger-->
            <div class="bl_hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!--header nav-->
            <nav class="bl_headerNav_wrap">
                <ul class="bl_headerNav">
                    <li class="bl_headerNav_item"><a href="#">Profile</a></li>
                    <li class="bl_headerNav_item"><a href="#">Works</a></li>
                    <li class="bl_headerNav_item"><a href="#">Blog</a></li>
                    <li class="bl_headerNav_item"><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div><!--/.ly_header-->
        <!--mainImg-->
        <img class="bl_mainImg" src="img/main-img.jpg" alt="メインイメージ">
        <!--service section-->
        <section class="ly_section">
            <div class="ly_section_inner">
                <h2 class="el_lv2Heading">Service</h2>
                <div class="bl_cardUnit_3col">
                    <div class="bl_cardUnit bl_cardUnit__service">
                        <figure class="bl_cardUnit_img">
                            <img src="img/webDesign-text.png" alt="webdesign">
                        </figure>
                        <p class="bl_cardUnit_txt">用途に応じたデザインを作成いたします。スマートフォン、タブレットからでも見やすいレスポンシブデザインも対応可能です。</p>
                    </div><!--/.bl_cardUnit-->
                    <div class="bl_cardUnit bl_cardUnit__service">
                        <figure class="bl_cardUnit_img bl_cardUnit_img__cording">
                            <img src="img/cording-text.png" alt="cording">
                        </figure>
                        <p class="bl_cardUnit_txt">JavaScriptやjQueryを使用した動きのあるWebサイトなど、様々なサイトのコーディングを行っています。</p>
                    </div><!--/.bl_cardUnit-->
                    <div class="bl_cardUnit bl_cardUnit__service">
                        <figure class="bl_cardUnit_img">
                            <img src="img/wordpress-text.png" alt="wordpress">
                        </figure>
                        <p class="bl_cardUnit_txt">WordPressを使用した、編集・更新のしやすいWebサイトを制作いたします。</p>
                    </div><!--/.bl_cardUnit-->
                </div><!--/.bl_cardUnit_3col-->
            </div><!--/.ly_section_inner-->
        </section>
        <!--works section-->
        <section class="ly_section">
            <div class="ly_section_inner">
                <h2 class="el_lv2Heading">Works</h2>
                <div class="bl_cardUnit_3col">
                    <a class="bl_cardUnit" href="#">
                        <img src="img/noImg.png" alt="">
                        <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                        <p>excerpt</p>
                    </a>
                    <a class="bl_cardUnit" href="#">
                        <img src="img/noImg.png" alt="">
                        <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                        <p>excerpt</p>
                    </a>
                    <a class="bl_cardUnit" href="#">
                        <img src="img/noImg.png" alt="">
                        <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                        <p>excerpt</p>
                    </a>
                    <a class="bl_cardUnit" href="#">
                        <img src="img/noImg.png" alt="">
                        <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                        <p>excerpt</p>
                    </a>
                    <a class="bl_cardUnit" href="#">
                        <img src="img/noImg.png" alt="">
                        <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                        <p>excerpt</p>
                    </a>
                    <a class="bl_cardUnit" href="#">
                        <img src="img/noImg.png" alt="">
                        <h3 class="el_lv3Heading">N-design / Webデザイン</h3>
                        <p>excerpt</p>
                    </a>
                </div><!--/.bl_cardUnit_3col-->
                <div class="ly_btn">
                    <button class="el_btn">more</button>
                </div>
            </div><!--/.ly_section_inner-->
        </section>
        <!--footer-->
        <footer class="ly_footer">
            <div class="ly_footer_inner">
                <nav>
                    <ul class="bl_footerNav">
                        <li class="bl_footerNav_item"><a href="#">Profile</a></li>
                        <li class="bl_footerNav_item"><a href="#">Works</a></li>
                        <li class="bl_footerNav_item"><a href="#">Blog</a></li>
                        <li class="bl_footerNav_item"><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <small class="el_copyRight">©︎ N-Design All rights reserved.</small>
            </div><!--/.ly_footer_inner-->
        </footer>
        <!--js読み込み-->
        <script src="script/jquery-3.6.0.min.js"></script>
        <script src="script/script.js"></script>
    </body>
</html>
