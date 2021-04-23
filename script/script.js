'use strict';

//ハンバーガーメニュー
$(function() {
    $('.bl_hamburger').on('click', function() {
        $(this).toggleClass('active');
        //ドロワー
        $('.bl_headerNav_wrap').toggleClass('js_drawer');
        return false;
    });
});

//スクロールフェードイン
$(function(){
    $(window).scroll(function (){
        $('.js_fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 100){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });
});

//lottie
let animation = lottie.loadAnimation({
    container: document.getElementById('lottie'), 
    renderer: 'svg', // 描画形式
    loop: true, // trueにしたらループ。1回再生の場合はfalse
    autoplay: true, // 自動再生
    path: 'data.json' // jsonのパスを指定
});
