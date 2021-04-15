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
